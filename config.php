<?php

/*
|--------------------------------------------------------------------------
| ENGINOVE WEBSITE CONFIGURATION
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| COMPANY
|--------------------------------------------------------------------------
*/

$company_name = "Enginove (Pvt) Ltd";

$company_website = "https://www.enginove.co.zw";

$company_email = "info@enginove.co.zw";

$company_phone = "+263 77 578 0627";


/*
|--------------------------------------------------------------------------
| SMTP CONFIGURATION
|--------------------------------------------------------------------------
|
| Example:
|
| SMTP_HOST = mail.enginove.co.zw
| SMTP_PORT = 587
| SMTP_SECURE = "tls"
|
| For SSL:
|
| SMTP_PORT = 465
| SMTP_SECURE = "ssl"
|
*/

$smtp_host = "YOUR_SMTP_HOST";

$smtp_port = 587;

$smtp_username = "info@enginove.co.zw";

$smtp_password = "YOUR_SMTP_PASSWORD";

$smtp_secure = "tls";


/*
|--------------------------------------------------------------------------
| SENDER
|--------------------------------------------------------------------------
*/

$mail_from_email = "info@enginove.co.zw";

$mail_from_name = "Enginove (Pvt) Ltd";

$mail_reply_email = "info@enginove.co.zw";

$mail_reply_name = "Enginove Construction";


/*
|--------------------------------------------------------------------------
| JSON DATABASE
|--------------------------------------------------------------------------
*/

$newsletter_data_directory =
    __DIR__ . DIRECTORY_SEPARATOR . "data";

$newsletter_json_file =
    $newsletter_data_directory .
    DIRECTORY_SEPARATOR .
    "newsletter_subscribers.json";


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
|
| IMPORTANT:
| Generate your own password hash.
|
| Example:
|
| password_hash("YourStrongPassword", PASSWORD_DEFAULT)
|
*/

$admin_password_hash =
    '$2y$10$REPLACE_THIS_WITH_YOUR_PASSWORD_HASH';


/*
|--------------------------------------------------------------------------
| TIMEZONE
|--------------------------------------------------------------------------
*/

date_default_timezone_set("Africa/Harare");