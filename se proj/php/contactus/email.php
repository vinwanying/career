<?php
    require_once('PHPMailerAutoload.php');
    session_start();
/*
https://dotblogs.com.tw/jhsiao/2015/09/17/153366
https://ithelp.ithome.com.tw/articles/10190109
*/
    $mail= new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->CharSet = "utf-8";
    $mail->Username = "";
    $mail->Password = "";
    $mail->From = "";
    $mail->FromName = htmlspecialchars(stripslashes(trim($_POST['contact_email'])));
    $mail->Subject = "User ".$_SESSION['username']." Contact Us";
    $mail->Body = htmlspecialchars($_POST['message']);
    $mail->IsHTML(true);
    $mail->AddAddress("");
    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }else{
        echo "Your message is received. Thank you. Now redirecting to homepage. <meta http-equiv=\"refresh\" content=\"3; url=http://localhost/home.php\" />";
    }
?>
