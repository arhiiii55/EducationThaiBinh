<?php
include "./mvc/admin/views/PHPMailer/src/Exception.php";
include "./mvc/admin/views/PHPMailer/src/OAuth.php";
include "./mvc/admin/views/PHPMailer/src/PHPMailer.php";
include "./mvc/admin/views/PHPMailer/src/POP3.php";
include "./mvc/admin/views/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class sendmail
{
    public function send_gmailgoogle($email, $phanhoimail)
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        try {
            // $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            // $phanhoi = isset($_POST['reply']) ? $_POST['reply'] : '';
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'phamanhanhct14@gmail.com';                     //SMTP username
            $mail->Password   = 'cptdwyjtqteyuvtr';                               //SMTP password
            $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('phamanhanhct14@gmail.com', 'Mailer');

            // gửi cho địa chỉ cần muốn gửi

            // $mail->addAddress('0750080150@sv.hcmunre.edu.vn', 'Anh');     //Add a recipient
            // $mail->addAddress('ellen@example.com'); //Name is optional
            $mail->addAddress($email, 'Anh');

            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Test Chức năng mail bởi Ánh';
            $mail->Body    = $phanhoimail;
            $mail->send();
            // echo $phanhoimail . $email;
           
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// class sendmail{
    // include "./mvc/admin/views/PHPMailer/src/Exception.php