<?php
namespace src\service\mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SamaneMailing 
{
    public function sendMail($from, $companyName, $recipients = array(), $replyTo = null, $cc = null, $bcc = null,$attachments = null, $subject, $body)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'ngorseckjee@gmail.com';                     // SMTP username
            $mail->Password   = 'mathematique123';                               // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($from, $companyName);
            foreach ($recipients as $key => $recipient) 
            {
                $mail->addAddress($recipient);
            }
            //$mail->addAddress('ngorsecka@gmail.com', 'Ngor Seck');     // Add a recipient
            //$mail->addAddress('boubasoum2011@gmail.com');               // Name is optional
            //$mail->addAddress('adonainangui03@gmail.com');               // Name is optional
            //$mail->addAddress('mohamedjohnson31@gmail.com');               // Name is optional
            //$mail->addAddress('sow.djibril.dev@gmail.com');               // Name is optional
            //$mail->addAddress('ousmanethiam4@gmail.com');               // Name is optional
            //$mail->addAddress('modouserignediop@gmail.com');               // Name is optional
            if($replyTo != null)
            {
                $mail->addReplyTo($replyTo, 'Information');
            }
            if($cc != null)
            {
                if(is_array($cc) && count($cc) != 0)
                {
                    foreach ($cc as $key => $carboncopy) 
                    {
                        $mail->addCC($carboncopy);
                    }  
                } else {
                    $mail->addCC($cc);
                }
            }
            if($bcc != null)
            {
                if(is_array($bcc) && count($bcc) != 0)
                {
                    foreach ($bcc as $key => $blindcarboncopy) 
                    {
                        $mail->addBCC($blindcarboncopy);
                    }
                } else {
                    $mail->addBCC($bcc);
                }
            }
            
            // Attachments
            if($attachments != null)
            {
                if(is_array($attachments) && count($attachments) != 0)
                {
                    foreach ($attachments as $key => $attachment) 
                    {
                        $mail->addAttachment($attachment);
                    }
                } else {
                    $mail->addAttachment($attachments);
                }
            }
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = 'Default text mail!';

            $mail->send();
            echo 'Message envoye';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>