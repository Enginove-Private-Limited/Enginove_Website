<?php

session_start();

$_SESSION = [];

session_destroy();

header(
    "Location: newsletter.php"
);

exit;