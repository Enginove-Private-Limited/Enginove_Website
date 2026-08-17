<?php

session_start();


if (
    empty($_SESSION["enginove_newsletter_admin"])
) {

    header(
        "Location: newsletter.php"
    );

    exit;

}


require_once "../config.php";

require_once "../send_email.php";


/*
|--------------------------------------------------------------------------
| INPUT
|--------------------------------------------------------------------------
*/

$subject =
    trim(
        $_POST["subject"] ?? ""
    );


$message =
    trim(
        $_POST["message"] ?? ""
    );


if (
    $subject === "" ||
    $message === ""
) {

    die(
        "Subject and message are required."
    );

}


/*
|--------------------------------------------------------------------------
| READ SUBSCRIBERS
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
| PREPARE MESSAGE
|--------------------------------------------------------------------------
*/

$formattedMessage =
    nl2br(
        htmlspecialchars(
            $message,
            ENT_QUOTES,
            "UTF-8"
        )
    );


/*
|--------------------------------------------------------------------------
| SEND COUNTERS
|--------------------------------------------------------------------------
*/

$sent = 0;

$failed = 0;


/*
|--------------------------------------------------------------------------
| SEND
|--------------------------------------------------------------------------
*/

foreach (
    $subscribers
    as $subscriber
) {


    if (
        ($subscriber["status"] ?? "")
        !== "active"
    ) {

        continue;

    }


    $email =
        $subscriber["email"] ?? "";

    $username =
        $subscriber["username"] ?? "";


    if (
        !filter_var(
            $email,
            FILTER_VALIDATE_EMAIL
        )
    ) {

        continue;

    }


    $safeName =
        htmlspecialchars(
            $username,
            ENT_QUOTES,
            "UTF-8"
        );


    $htmlBody = <<<HTML

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>
{$subject}
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
max-width:680px;
margin:40px auto;
background:#ffffff;
border-radius:12px;
overflow:hidden;
"
>


<div
style="
background:#1e2a2f;
padding:30px;
text-align:center;
"
>

<h1
style="
margin:0;
color:#fff;
"
>
ENGINOVE
</h1>

<p
style="
color:#62c888;
"
>
News & Updates
</p>

</div>


<div
style="
padding:40px;
"
>

<p
style="
color:#52655d;
font-size:16px;
"
>
Hello {$safeName},
</p>


<h2
style="
color:#1e2a2f;
"
>
{$subject}
</h2>


<div
style="
color:#52655d;
font-size:16px;
line-height:1.8;
"
>

{$formattedMessage}

</div>


<br>


<p
style="
color:#52655d;
"
>

Regards,<br>

<strong>
Enginove (Pvt) Ltd
</strong>

</p>

</div>


<div
style="
background:#1e2a2f;
padding:20px;
text-align:center;
"
>

<p
style="
color:#cbdcd3;
font-size:13px;
"
>
www.enginove.co.zw
</p>

</div>


</div>

</body>

</html>

HTML;


    $plainText =

        "Hello {$username},\n\n" .

        $subject .
        "\n\n" .

        $message .
        "\n\n" .

        "Regards,\n" .

        "Enginove (Pvt) Ltd\n" .

        "www.enginove.co.zw";


    $result =
        sendEnginoveEmail(
            $email,
            $username,
            $subject,
            $htmlBody,
            $plainText
        );


    if (
        $result["success"]
    ) {

        $sent++;

    } else {

        $failed++;

    }


    /*
    |--------------------------------------------------------------------------
    | SMALL DELAY
    |--------------------------------------------------------------------------
    |
    | Prevents hammering the SMTP server if the list becomes large.
    |
    */

    usleep(150000);

}


/*
|--------------------------------------------------------------------------
| RESULT PAGE
|--------------------------------------------------------------------------
*/

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>
Newsletter Sent
</title>

<style>

body{

margin:0;

background:#f4f9f6;

font-family:Arial,sans-serif;

}


.result{

max-width:600px;

margin:100px auto;

background:#fff;

padding:40px;

border-radius:15px;

text-align:center;

box-shadow:
0 15px 40px rgba(0,0,0,.08);

}


.success{

color:#1f8b4c;

font-size:40px;

}


a{

display:inline-block;

margin-top:25px;

padding:14px 25px;

background:#1e2a2f;

color:#fff;

text-decoration:none;

border-radius:30px;

}

</style>

</head>

<body>


<div class="result">

<div class="success">
✓
</div>

<h1>
Newsletter Processed
</h1>

<p>
Successfully sent:
<strong>
<?php echo $sent; ?>
</strong>
</p>

<p>
Failed:
<strong>
<?php echo $failed; ?>
</strong>
</p>


<a href="newsletter.php">
BACK TO NEWSLETTER
</a>

</div>


</body>

</html>