<?php
require 'ClassAutoLoad.php';

$name='User';
$email='';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $name=$_POST['name'] ?? 'User';
    $email=$_POST['email'] ?? '';
    $password=$_POST['password'] ?? '';
}


  if (!empty($email)) {
        $mailCnt = [
            'from_name' => 'Admin',
            'from_email' => 'Louis.Muturi@strathmore.edu',
            'to_name' => $name,
            'to_email' => $email,
            'subject' => 'Welcome to ICS 2.2! Account verification',
            'body' => "Hello $name, <br> You requested an account on ICS 2.2.<br><br>In order to use this account, Please <a href=''>click here</a> to complete the registration process.<br><br> If you did not request this account, please ignore this email.<br><br> Regards,<br> System Admin<br> ICS 2.2"
        ];

        $ObjSendMail = new SendMail();
        $ObjSendMail->Send_Mail($conf, $mailCnt);
    }

       // Display result message
        echo "<h2>Thank you for signing up, $name!</h2>";
        echo "<p>A verification email has been sent to $email. Please check your inbox.</p>";
        exit(); // Stop execution after sending email
    

?>
