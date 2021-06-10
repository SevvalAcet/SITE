<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function



if ( $_POST )
{
	$adi_soyadi = $_POST['adi_soyadi'];
	$telefon    = $_POST['telefon'];
	$email      = $_POST['email'];
	$mesaj      = $_POST['mesaj'];

	// DB::insert("INSERT INTO iletisim(adi_soyadi,telefon,email,mesaj) VALUES(?,?,?,?)",array(
	// 	$adi_soyadi,
	// 	$telefon,
	// 	$email,
	// 	$mesaj
	// ));

	$mail_icerik = "Merhaba yönetici, sitenizden yeni bir iletişim formu gönderildi. Bilgileri aşağıdadır.";
	$mail_icerik .= "Adı Soyadı: $adi_soyadi<br>";
	$mail_icerik .= "Telefon: $telefon<br>";
	$mail_icerik .= "Email: $email<br>";
	$mail_icerik .= "Mesaj: $mesaj<br>";



	$mail = new PHPMailer(true);

    try {

      $mail->SMTPDebug = 0;           
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'sevvalacet757@gmail.com';                     //SMTP username
      $mail->Password   = 'Berkem1134';                               //SMTP password
      $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

      //Recipients
      $mail->setFrom('sevvalacet757@gmail.com', 'Sevval1');
      $mail->addAddress('sevvalacet1134@gmail.com', 'Sevval2');
      $mail->charset="UTF-8";
      $mail->setLanguage('tr');

      $mail->isHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = 'Sitenizden iletisim formu gönderildi.';
		$mail->Body    = $mail_icerik;
		$mail->AltBody = $mail_icerik;

		$mail->send();

	}
	catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		die();
	}
   header("Location:index.php?success=1");
}







?>