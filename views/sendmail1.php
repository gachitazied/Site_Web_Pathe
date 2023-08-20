<?php

        $email =$_GET["email"];
       
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'gachita.zied@esprit.tn';                     // SMTP username
        $mail->Password   = "nekjreuckgkzlpge";                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('gachita.zied@esprit.tn', ' ');
        $mail->addAddress($email);     // Add a recipient

       
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'ArabSoft Ciné';
        $mail->Body    = 'Votre réservation a été enregistrée avec succès. Veuillez consulter votre place au cinéma.';
       $mail->send();
            echo '';
            $prix=$_GET["prix"];
            header("Location: table.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }    
          
?>