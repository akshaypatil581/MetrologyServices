<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");


require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

if ($_GET['type'] == "contactUs") {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $message = $_GET["message"];    
    $url = "https://metrologyservices.com/tenet/development/email/email.php?name=".$name."&email=".$email."&phone=".$phone."&message=".$message;
}else if ($_GET['type'] == "raq") {
	$companyName = $_GET["companyName"];
	$contactPersonName = $_GET["contactPersonName"];
	$phone = $_GET["phone"];
	$email = $_GET["email"];
	$tableData = $_GET["tableData"]; 
    $url = "https://metrologyservices.com/tenet/development/email/raqEmail.php?companyName=".$companyName."&contactPersonName=".$contactPersonName."&email=".$email."&phone=".$phone."&tableData=".$tableData;
} 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$htmlMessage = curl_exec($ch);
curl_close($ch);

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $to = "info@metrologyservices.com";
    $toName = "";
    $subject = "New Lead from Website";
    
    if ($_GET['type'] == "contactUs") {
       $toName = $name; 
       $subject = "New Lead from Website";
    }else if ($_GET['type'] == "raq") {
        $toName = $contactPersonName;
        $subject = "New Quote Request";
    }
    //Server settings
    $mail->isSMTP(); 
    $mail->Host = 'metrologyservices.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'no-reply@metrologyservices.com'; 
    $mail->Password = 'NoReply@EMAIL';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('no-reply@metrologyservices.com', 'Metrologyservices Mail');
    $mail->addAddress($to, $toName);
    $mail->addReplyTo('info@metrologyservices.com', 'Metrology Services');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body= "".$htmlMessage;

    $mail->send();
    echo 'true';
} catch (Exception $e) {
    echo "Failed";
 }
?>