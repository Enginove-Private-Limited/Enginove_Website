<?php

header(
    "Content-Type: application/json; charset=UTF-8"
);


require_once __DIR__ . "/config.php";

require_once __DIR__ . "/send_email.php";


/*
|--------------------------------------------------------------------------
| JSON RESPONSE
|--------------------------------------------------------------------------
*/

function response(
    bool $success,
    string $message,
    int $status = 200
): void {

    http_response_code($status);

    echo json_encode(
        [
            "success" => $success,
            "message" => $message
        ],
        JSON_UNESCAPED_UNICODE
    );

    exit;
}


/*
|--------------------------------------------------------------------------
| REQUEST METHOD
|--------------------------------------------------------------------------
*/

if (
    $_SERVER["REQUEST_METHOD"] !== "POST"
) {

    response(
        false,
        "Invalid request.",
        405
    );

}


/*
|--------------------------------------------------------------------------
| GET INPUT
|--------------------------------------------------------------------------
*/

$username =
    trim(
        $_POST["username"] ?? ""
    );


$email =
    strtolower(
        trim(
            $_POST["email"] ?? ""
        )
    );


/*
|--------------------------------------------------------------------------
| CLEAN USERNAME
|--------------------------------------------------------------------------
*/

$username =
    preg_replace(
        "/[^\p{L}\p{N}\s.'-]/u",
        "",
        $username
    );

$username =
    trim($username);


/*
|--------------------------------------------------------------------------
| VALIDATE NAME
|--------------------------------------------------------------------------
*/

if ($username === "") {

    response(
        false,
        "Please enter your name."
    );

}


if (
    mb_strlen($username) > 100
) {

    response(
        false,
        "Your name is too long."
    );

}


/*
|--------------------------------------------------------------------------
| VALIDATE EMAIL
|--------------------------------------------------------------------------
*/

if (
    !filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    )
) {

    response(
        false,
        "Please enter a valid email address."
    );

}


/*
|--------------------------------------------------------------------------
| CREATE DATA DIRECTORY
|--------------------------------------------------------------------------
*/

if (
    !is_dir(
        $newsletter_data_directory
    )
) {

    if (
        !mkdir(
            $newsletter_data_directory,
            0755,
            true
        )
    ) {

        response(
            false,
            "Unable to create newsletter storage.",
            500
        );

    }

}


/*
|--------------------------------------------------------------------------
| CREATE JSON FILE
|--------------------------------------------------------------------------
*/

if (
    !file_exists(
        $newsletter_json_file
    )
) {

    file_put_contents(
        $newsletter_json_file,
        "[]",
        LOCK_EX
    );

}


/*
|--------------------------------------------------------------------------
| READ JSON
|--------------------------------------------------------------------------
*/

$json =
    file_get_contents(
        $newsletter_json_file
    );


$subscribers =
    json_decode(
        $json,
        true
    );


if (
    !is_array($subscribers)
) {

    $subscribers = [];

}


/*
|--------------------------------------------------------------------------
| FIND EXISTING SUBSCRIBER
|--------------------------------------------------------------------------
*/

$existingIndex = null;


foreach (
    $subscribers
    as $index => $subscriber
) {

    if (
        isset($subscriber["email"]) &&
        strtolower(
            $subscriber["email"]
        ) === $email
    ) {

        $existingIndex =
            $index;

        break;

    }

}


/*
|--------------------------------------------------------------------------
| ALREADY SUBSCRIBED
|--------------------------------------------------------------------------
*/

if (
    $existingIndex !== null &&
    ($subscribers[$existingIndex]["status"] ?? "")
        === "active"
) {

    response(
        false,
        "This email address is already subscribed."
    );

}


/*
|--------------------------------------------------------------------------
| ID
|--------------------------------------------------------------------------
*/

$highestId = 0;


foreach (
    $subscribers
    as $subscriber
) {

    if (
        isset($subscriber["id"]) &&
        is_numeric($subscriber["id"])
    ) {

        $highestId =
            max(
                $highestId,
                (int)$subscriber["id"]
            );

    }

}


$newId =
    $highestId + 1;


/*
|--------------------------------------------------------------------------
| SAVE / REACTIVATE
|--------------------------------------------------------------------------
*/

if (
    $existingIndex !== null
) {

    $subscribers[$existingIndex] = [

        "id" =>
            $subscribers[$existingIndex]["id"],

        "username" =>
            $username,

        "email" =>
            $email,

        "status" =>
            "active",

        "subscribed_at" =>
            date("Y-m-d H:i:s"),

        "unsubscribed_at" =>
            null

    ];

} else {

    $subscribers[] = [

        "id" =>
            $newId,

        "username" =>
            $username,

        "email" =>
            $email,

        "status" =>
            "active",

        "subscribed_at" =>
            date("Y-m-d H:i:s"),

        "unsubscribed_at" =>
            null

    ];

}


/*
|--------------------------------------------------------------------------
| SAVE JSON
|--------------------------------------------------------------------------
*/

$encoded =
    json_encode(
        $subscribers,
        JSON_PRETTY_PRINT |
        JSON_UNESCAPED_UNICODE |
        JSON_UNESCAPED_SLASHES
    );


if (
    file_put_contents(
        $newsletter_json_file,
        $encoded,
        LOCK_EX
    ) === false
) {

    response(
        false,
        "Unable to save your subscription.",
        500
    );

}


/*
|--------------------------------------------------------------------------
| SAFE NAME
|--------------------------------------------------------------------------
*/

$safeName =
    htmlspecialchars(
        $username,
        ENT_QUOTES,
        "UTF-8"
    );


/*
|--------------------------------------------------------------------------
| WELCOME EMAIL
|--------------------------------------------------------------------------
*/

$htmlBody = <<<HTML

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>
Welcome to Enginove News & Updates
</title>

</head>


<body
style="
margin:0;
background:#f4f9f6;
font-family:Arial,Helvetica,sans-serif;
"
>


<div
style="
max-width:650px;
margin:40px auto;
background:#ffffff;
border-radius:12px;
overflow:hidden;
"
>


<!-- HEADER -->

<div
style="
background:#1e2a2f;
padding:35px;
text-align:center;
"
>

<h1
style="
margin:0;
color:#ffffff;
font-size:30px;
"
>
ENGINOVE
</h1>

<p
style="
margin:8px 0 0;
color:#62c888;
"
>
Construction & Civil Engineering
</p>

</div>


<!-- BODY -->

<div
style="
padding:40px;
"
>

<h2
style="
color:#1e2a2f;
font-size:27px;
"
>
Thank You {$safeName}!
</h2>


<p
style="
color:#52655d;
font-size:16px;
line-height:1.7;
"
>

Thank you <strong>{$safeName}</strong>
for joining
<strong>Enginove News & Updates</strong>.

</p>


<p
style="
color:#52655d;
font-size:16px;
line-height:1.7;
"
>

We will keep you updated as and when
updates are available.

You will receive information about our
latest projects, company developments,
construction activities and other
important Enginove updates.

</p>


<div
style="
margin:30px 0;
padding:20px;
background:#f4f9f6;
border-left:4px solid #1f8b4c;
"
>

<strong style="color:#1e2a2f;">
Welcome to Enginove News & Updates.
</strong>

</div>


<p
style="
color:#52655d;
line-height:1.7;
"
>

Regards,<br>

<strong>
Enginove (Pvt) Ltd
</strong>

</p>

</div>


<!-- FOOTER -->

<div
style="
background:#1e2a2f;
padding:22px;
text-align:center;
"
>

<p
style="
color:#cbdcd3;
font-size:13px;
margin:0;
"
>
www.enginove.co.zw
</p>

</div>


</div>

</body>

</html>

HTML;


/*
|--------------------------------------------------------------------------
| PLAIN TEXT
|--------------------------------------------------------------------------
*/

$plainText =

"Thank you {$username} for joining Enginove News & Updates.\n\n" .

"We will keep you updated as and when updates are available.\n\n" .

"You will receive information about our latest projects, " .
"company developments, construction activities and other " .
"important Enginove updates.\n\n" .

"Regards,\n" .
"Enginove (Pvt) Ltd\n" .
"www.enginove.co.zw";


/*
|--------------------------------------------------------------------------
| SEND EMAIL
|--------------------------------------------------------------------------
*/

$mailResult =
    sendEnginoveEmail(
        $email,
        $username,
        "Thank You for Joining Enginove News & Updates",
        $htmlBody,
        $plainText
    );


/*
|--------------------------------------------------------------------------
| RESULT
|--------------------------------------------------------------------------
*/

if (
    $mailResult["success"]
) {

    response(
        true,
        "Thank you {$username}! You have successfully subscribed. A welcome email has been sent to you."
    );

}


/*
|--------------------------------------------------------------------------
| DATABASE SAVED BUT EMAIL FAILED
|--------------------------------------------------------------------------
*/

response(
    true,
    "Thank you {$username}! Your subscription was saved successfully. We could not send the welcome email right now."
);