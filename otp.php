<?php
	 session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";
echo "enterring";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function generateNumericOTP($n) { 
      
     
    $generator = "1357902468"; 
  
    $result = ""; 
  
    for ($i = 1; $i <= $n; $i++) { 
        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 
  
    
    return $result; 
} 

$uemail = $_POST['email'];
$_SESSION["pass"] = $uemail;
	$n=4;
	$otp=generateNumericOTP($n);
	$_SESSION["otp"]=$otp;
	 require 'phpmailer/PHPMailerAutoload.php';
 $mail=new PHPMailer;
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';
 
 $mail->Username='alrichkudelak1999@gmail.com';
 $mail->Password='Alrichkudel@15';
 
 $mail->setFrom('alrichkudelak1999@gmail.com','Canteen@frcrce.in');
 $mail->addAddress(''.$uemail, 'user1');
 $mail->addReplyTO('alrichkudelak1999@gmail.com');
 
 $mail->isHTML(true);
 $mail->Subject='Reset Password';
 $mail->Body='Your one time password is'.$otp;

if(!$mail->send()){
	echo "Error OCcured While Sending email";
}
else{
	 echo "Emaill sent";
	 echo '<script language="javascript">';
    echo 'window.close();';  
    echo 'alert("Otp sent on your email!!");';
    echo 'window.open("resetpasswd2.php");';
    echo '</script>';
}						
     

?>
  