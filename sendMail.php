<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require_once 'model/class.phpmailer.php';
require_once 'model/class.smtp.php';
require_once 'Mysql.php';

function sendemail($s_no, $mailaddress)
{
    $mysql = new Mysql();
    $sql = "SELECT s_name FROM student WHERE s_no=$s_no";
    $data = $mysql->getData($sql);
    $name = $data[0][0];
    //$mailaddress = $data[0][0];

    //echo '<br>' . 'mailaddress:' . $mailaddress;
//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "smtp.qq.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "921977939@qq.com";
//Password to use for SMTP authentication
    $mail->Password = "ewpganonwaokbebh";
//Set who the message is to be sent from
    $mail->setFrom('921977939@qq.com', '韦驮天');
//Set an alternative reply-to address
//$mail->addReplyTo('weituotian@163.com', 'First Last');
//Set who the message is to be sent to
    $mail->addAddress('weituotian@163.com');
    $mail->addAddress($mailaddress);
//Set the subject line
    $mail->Subject = "发给".$name."的一点Java Web的资料";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
    $mail->createBody();
    //$mail->Body = "";
    $mail->msgHTML(file_get_contents('tabel.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
    $mail->CharSet = "utf-8";

    //$mail->addAttachment($file_name);
    //echo $file_name."<br>";
//send the message, check for errors
    if (!$mail->send()) {
        echo "发送邮件失败了:(⊙_⊙)? " . $mail->ErrorInfo . "<br>";
    } else {
        echo "发了一封邮件到你的邮箱【" . $mailaddress . "】，请查收^_^";
    }
}
