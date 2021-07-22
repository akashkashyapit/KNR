<?php 


$to = "info@knrengineers.com";
$from = "info@knrengineers.com"; 
$subject = "KNR Engineers";
// $cc = "akashkashyapit@gmail.com";
$url = "index.php";
// Global configuration end
$errmasg = "";

 $name = htmlentities(trim($_POST['name']));
 $email = htmlentities(trim($_POST['email']));
 $sub = htmlentities(trim($_POST['sub']));
 $msg = htmlentities(trim(nl2br($_POST['msg'])));


 
if($email){
$message = "<table border='0' cellpadding='2' cellspacing='2' width='600'>
<tr><td>Name: ".$name." </td></tr>
<tr><td>Email: ".$email."</td></tr>
<tr><td>Subject: ".$sub."</td></tr>
<tr><td>Message:".$msg."</td></tr>
</table>";
 
 } else{
 	
$errmasg = "No Data";	
 }
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$from . "\r\n";
$headers .= 'Cc:'.$cc . "\r\n";



if($errmasg == ""){
if(mail($to,$subject,$message,$headers)){
    echo '<h2>Successfull</h2>';   
     echo '<h1><a href="'.$url.'">Back to Home</a></h1>';   
}else{
    echo 'Error occurred while sending email';
}
}else{
    echo $errmasg;
}
?>