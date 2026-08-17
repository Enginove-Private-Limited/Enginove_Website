<?php

session_start();

require_once "../config.php";


/*
|--------------------------------------------------------------------------
| SIMPLE ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/

if (
    empty($_SESSION["enginove_newsletter_admin"])
) {

    if (
        $_SERVER["REQUEST_METHOD"] === "POST"
        &&
        isset($_POST["admin_password"])
    ) {

        if (
            password_verify(
                $_POST["admin_password"],
                $admin_password_hash
            )
        ) {

            $_SESSION[
                "enginove_newsletter_admin"
            ] = true;

            header(
                "Location: newsletter.php"
            );

            exit;

        }

        $loginError =
            "Incorrect password.";

    }

    ?>

    <!DOCTYPE html>

    <html>

    <head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width,initial-scale=1">

    <title>
    Enginove Newsletter Login
    </title>

    <style>

    body{
        margin:0;
        background:#f4f9f6;
        font-family:Arial,sans-serif;
    }

    .login-box{
        max-width:420px;
        margin:100px auto;
        background:#fff;
        padding:40px;
        border-radius:15px;
        box-shadow:0 15px 40px rgba(0,0,0,.1);
    }

    h1{
        color:#1e2a2f;
    }

    input{
        width:100%;
        height:50px;
        box-sizing:border-box;
        padding:0 15px;
        margin:10px 0;
        border:1px solid #ddd;
        border-radius:5px;
    }

    button{
        width:100%;
        height:50px;
        background:#1f8b4c;
        color:#fff;
        border:0;
        border-radius:5px;
        font-weight:bold;
        cursor:pointer;
    }

    .error{
        color:#b00020;
        margin-bottom:15px;
    }

    </style>

    </head>

    <body>

    <div class="login-box">

    <h1>
    Enginove Newsletter
    </h1>

    <p>
    Administrator Login
    </p>

    <?php

    if (
        isset($loginError)
    ) {

        echo
        '<div class="error">' .
        htmlspecialchars($loginError) .
        '</div>';

    }

    ?>

    <form method="POST">

    <input
    type="password"
    name="admin_password"
    placeholder="Administrator Password"
    required
    >

    <button type="submit">
    LOGIN
    </button>

    </form>

    </div>

    </body>

    </html>

    <?php

    exit;

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


$activeSubscribers = 0;


foreach (
    $subscribers
    as $subscriber
) {

    if (
        ($subscriber["status"] ?? "")
        === "active"
    ) {

        $activeSubscribers++;

    }

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>
Enginove Newsletter Manager
</title>


<style>

*{
box-sizing:border-box;
}

body{

margin:0;

background:#f4f9f6;

font-family:
Arial,
Helvetica,
sans-serif;

color:#1e2a2f;

}


.admin-header{

background:#1e2a2f;

padding:25px;

color:#fff;

}


.admin-header-inner{

max-width:1100px;

margin:auto;

display:flex;

justify-content:space-between;

align-items:center;

}


.admin-container{

max-width:1100px;

margin:40px auto;

padding:0 20px;

}


.stats{

display:grid;

grid-template-columns:
repeat(3,1fr);

gap:20px;

margin-bottom:30px;

}


.stat{

background:#fff;

padding:25px;

border-radius:12px;

box-shadow:
0 8px 25px rgba(0,0,0,.06);

}


.stat strong{

display:block;

font-size:32px;

color:#1f8b4c;

}


.card{

background:#fff;

padding:35px;

border-radius:15px;

box-shadow:
0 8px 25px rgba(0,0,0,.06);

}


label{

display:block;

font-weight:bold;

margin:
18px 0 8px;

}


input,
textarea{

width:100%;

border:
1px solid #d8e4dc;

border-radius:6px;

padding:14px;

font-size:15px;

}


textarea{

min-height:300px;

resize:vertical;

}


button{

margin-top:20px;

padding:15px 25px;

border:0;

border-radius:30px;

background:#1f8b4c;

color:#fff;

font-weight:bold;

cursor:pointer;

}


button:hover{

background:#155f34;

}


.logout{

color:#fff;

text-decoration:none;

}

@media(max-width:700px){

.stats{

grid-template-columns:1fr;

}

.admin-header-inner{

display:block;

}

}

</style>

</head>


<body>


<header class="admin-header">

<div class="admin-header-inner">

<div>

<strong>
ENGINOVE
</strong>

<br>

Newsletter Manager

</div>

<a
class="logout"
href="logout.php"
>
Logout
</a>

</div>

</header>


<main class="admin-container">


<div class="stats">


<div class="stat">

Subscribers

<strong>
<?php
echo count($subscribers);
?>
</strong>

</div>


<div class="stat">

Active

<strong>
<?php
echo $activeSubscribers;
?>
</strong>

</div>


<div class="stat">

System

<strong>
SMTP
</strong>

</div>


</div>


<div class="card">

<h1>
Send Newsletter
</h1>

<p>
Write a message to your active Enginove subscribers.
</p>


<form
action="send_newsletter.php"
method="POST"
>


<label>
Subject
</label>

<input
type="text"
name="subject"
placeholder="Enginove Project Update"
required
maxlength="200"
>


<label>
Newsletter Message
</label>

<textarea
name="message"
placeholder="Write your newsletter here..."
required
></textarea>


<button type="submit">

SEND NEWSLETTER

</button>

</form>

</div>


</main>


</body>

</html>