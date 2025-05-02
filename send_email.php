<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail_host="localhost";
// $user_name="info@al-tabbaahackettcapital.com";
// $mail_pass="***";
$from_name="Al-Tabbaa & Hackett Capital";
$from_email="info@al-tabbaahackettcapital.com";
//$to_email="igglobalsavings@protonmail.com";
$to_email="muzammil.mykhan@gmail.com";


if (!empty($_POST['g_recaptcha_response'])) {
  $secret = '6LfMHS8gAAAAAL0xAaVP8BXsR8IoFci996bBfUrF';
  
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g_recaptcha_response']);
  $responseData = json_decode($verifyResponse);
  
  if ($responseData->success) {
    if ($_POST['form']=='contact') {



      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $msg = $_POST['msg'];


      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
      //   $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

      //Set SMTP host name                          
      $mail->Host = $mail_host;
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = false;
      //Provide username and password     
      $mail->Username = $user_name;
      $mail->Password = $mail_pass;
      //If SMTP requires TLS encryption then set it
      // $mail->SMTPSecure = "none";
      $mail->SMTPAutoTLS= false;
      //Set TCP port to connect to
      $mail->Port = 25;
      $mail->From = $from_email;
      $mail->FromName = $from_name;
      $mail->addAddress($to_email);
     


      $mail->isHTML(true);

      $mail->Subject = $subject;

      $mailContent = file_get_contents('templates/contact_mail.php');
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{phone}}', $phone, $mailContent);
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{msg}}',  $msg, $mailContent);

      $mail->Body = $mailContent;

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
          http_response_code(201);
      }
    } else if ($_POST['form']=='register') {

      ob_start();

      require_once "vendor/autoload.php";

      $f_name = $_POST['f_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      

      $mail = new PHPMailer(true);

      //Enable SMTP debugging.
        // $mail->SMTPDebug = 3;                     
      //Set PHPMailer to use SMTP.

      $mail->isSMTP();

        //Set SMTP host name                          
      $mail->Host = $mail_host;
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = false;
      //Provide username and password     
      // $mail->Username = $user_name;
      // $mail->Password = $mail_pass;
      //If SMTP requires TLS encryption then set it
      // $mail->SMTPSecure = "none";
      $mail->SMTPAutoTLS= false;
      //Set TCP port to connect to
      $mail->Port = 25;
      $mail->From = $from_email;
      $mail->FromName = $from_name;
      $mail->addAddress($to_email);

      $mail->isHTML(true);

      $mail->Subject = "IG Global - Registration Request";

      $mailContent = file_get_contents('templates/register_mail.php');
      $mailContent = str_replace('{{f_name}}',  $f_name, $mailContent);
      $mailContent = str_replace('{{email}}', $email, $mailContent);
      $mailContent = str_replace('{{phone}}',  $phone, $mailContent);

      $mail->Body = $mailContent;
      // $mail->Body = "test";

      if ($mail->send()) {
        echo 'success';
        // http_response_code(201);
      } else {
        echo "fail";
      die;
          http_response_code(201);
      }
    }
  }
} else {
  echo 'captcha-error';
}