<?php

require_once __DIR__ . "/config.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


/*
|--------------------------------------------------------------------------
| LOAD PHPMailer
|--------------------------------------------------------------------------
|
| If you installed PHPMailer manually:
|
| PHPMailer/src/
|
*/

require_once __DIR__ .
    "/PHPMailer/src/Exception.php";

require_once __DIR__ .
    "/PHPMailer/src/PHPMailer.php";

require_once __DIR__ .
    "/PHPMailer/src/SMTP.php";


/*
|--------------------------------------------------------------------------
| SEND EMAIL
|--------------------------------------------------------------------------
*/

function sendEnginoveEmail(
    string $toEmail,
    string $toName,
    string $subject,
    string $htmlBody,
    string $plainTextBody = ""
): array {


    global $smtp_host;
    global $smtp_port;
    global $smtp_username;
    global $smtp_password;
    global $smtp_secure;

    global $mail_from_email;
    global $mail_from_name;

    global $mail_reply_email;
    global $mail_reply_name;


    $mail = new PHPMailer(true);


    try {


        /*
        |--------------------------------------------------------------------------
        | SMTP
        |--------------------------------------------------------------------------
        */

        $mail->isSMTP();

        $mail->Host =
            $smtp_host;

        $mail->SMTPAuth = true;

        $mail->Username =
            $smtp_username;

        $mail->Password =
            $smtp_password;

        $mail->Port =
            $smtp_port;


        /*
        |--------------------------------------------------------------------------
        | SECURITY
        |--------------------------------------------------------------------------
        */

        if (
            strtolower($smtp_secure) === "ssl"
        ) {

            $mail->SMTPSecure =
                PHPMailer::ENCRYPTION_SMTPS;

        } else {

            $mail->SMTPSecure =
                PHPMailer::ENCRYPTION_STARTTLS;

        }


        /*
        |--------------------------------------------------------------------------
        | PRODUCTION
        |--------------------------------------------------------------------------
        */

        $mail->SMTPDebug = 0;


        /*
        |--------------------------------------------------------------------------
        | CHARACTER SET
        |--------------------------------------------------------------------------
        */

        $mail->CharSet = "UTF-8";


        /*
        |--------------------------------------------------------------------------
        | SENDER
        |--------------------------------------------------------------------------
        */

        $mail->setFrom(
            $mail_from_email,
            $mail_from_name
        );


        /*
        |--------------------------------------------------------------------------
        | REPLY TO
        |--------------------------------------------------------------------------
        */

        $mail->addReplyTo(
            $mail_reply_email,
            $mail_reply_name
        );


        /*
        |--------------------------------------------------------------------------
        | RECIPIENT
        |--------------------------------------------------------------------------
        */

        $mail->addAddress(
            $toEmail,
            $toName
        );


        /*
        |--------------------------------------------------------------------------
        | EMAIL FORMAT
        |--------------------------------------------------------------------------
        */

        $mail->isHTML(true);

        $mail->Subject =
            $subject;

        $mail->Body =
            $htmlBody;

        $mail->AltBody =
            $plainTextBody !== ""
                ? $plainTextBody
                : strip_tags($htmlBody);


        /*
        |--------------------------------------------------------------------------
        | SEND
        |--------------------------------------------------------------------------
        */

        $mail->send();


        return [

            "success" => true,

            "message" =>
                "Email sent successfully."

        ];


    } catch (Exception $e) {


        return [

            "success" => false,

            "message" =>
                $mail->ErrorInfo

        ];

    }

}