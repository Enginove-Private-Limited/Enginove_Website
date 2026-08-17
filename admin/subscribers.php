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

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>
Enginove Subscribers
</title>

<style>

body{

margin:0;

background:#f4f9f6;

font-family:Arial,sans-serif;

color:#1e2a2f;

}


.container{

max-width:1100px;

margin:50px auto;

padding:20px;

}


.card{

background:#fff;

padding:30px;

border-radius:15px;

box-shadow:
0 10px 30px rgba(0,0,0,.06);

overflow-x:auto;

}


table{

width:100%;

border-collapse:collapse;

}


th,
td{

padding:14px;

text-align:left;

border-bottom:
1px solid #e5eee9;

}


th{

background:#1e2a2f;

color:#fff;

}


.active{

color:#1f8b4c;

font-weight:bold;

}


.unsubscribed{

color:#b00020;

}


a{

display:inline-block;

margin-bottom:20px;

color:#1f8b4c;

font-weight:bold;

text-decoration:none;

}

</style>

</head>


<body>


<div class="container">


<a href="newsletter.php">
← Back to Newsletter
</a>


<div class="card">

<h1>
Newsletter Subscribers
</h1>


<table>

<thead>

<tr>

<th>
ID
</th>

<th>
Name
</th>

<th>
Email
</th>

<th>
Status
</th>

<th>
Subscribed
</th>

</tr>

</thead>


<tbody>

<?php

foreach (
    $subscribers
    as $subscriber
) {

?>

<tr>

<td>

<?php

echo
htmlspecialchars(
    $subscriber["id"] ?? ""
);

?>

</td>


<td>

<?php

echo
htmlspecialchars(
    $subscriber["username"] ?? ""
);

?>

</td>


<td>

<?php

echo
htmlspecialchars(
    $subscriber["email"] ?? ""
);

?>

</td>


<td>

<span
class="<?php
echo
htmlspecialchars(
    $subscriber["status"] ?? ""
);
?>"
>

<?php

echo
htmlspecialchars(
    $subscriber["status"] ?? ""
);

?>

</span>

</td>


<td>

<?php

echo
htmlspecialchars(
    $subscriber["subscribed_at"] ?? ""
);

?>

</td>

</tr>

<?php

}

?>

</tbody>

</table>

</div>

</div>

</body>

</html>