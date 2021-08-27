<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
if (isset($_FILES["resume"])) {
	$temp = explode(".", $_FILES["resume"]["name"]);
	$newfilename =  "library/" .round(microtime(true)).'.'.end($temp);
	move_uploaded_file($_FILES["resume"]["tmp_name"], $newfilename);
}


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'webmaster@thekarithgroup.com';                 // SMTP username
    $mail->Password = 'admin@123';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@thekarithgroup.com', $name);
    $mail->addAddress("hello@thekarithgroup.com", "Karith Design Build");     // Add a recipient
    $mail->addReplyTo($email, $name);
    $mail->addAttachment($newfilename);
    $mail->DKIM_domain = 'thekarithgroup.com';
	$mail->DKIM_private = 'dkim_privatekey.txt';
	$mail->DKIM_selector = 'default';
	$mail->DKIM_identity = $mail->From;
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Application for Accountant cum Admin Manager';
    $mail->Body    = "A New Application has been received for Accountant cum Admin Manager post on website. Here are the details. Also Attaching the Resume Provided. 
    					<table>
    						<tr>
    							<th>Name</th>
    							<td>$name</td>
    						</tr>
    						<tr>
    							<th>Email ID</th>
    							<td>$email</td>
    						</tr>
    						<tr>
    							<th>Phone No</th>
    							<td>$phone</td>
    						</tr>
    					</table>";
    $mail->AltBody = 'New Application recived.';

    $mail->send();
    echo 'true';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}