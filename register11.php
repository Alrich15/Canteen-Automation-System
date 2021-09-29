<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <title>Registeration Form</title>
	
<!--<script type="text/javascript" src="signup.js">
	   </script> 
  <link rel="stylesheet" type="text/css" href="reg.css">
  $fname = $_POST['name'];
$lname = $_POST['name1'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$uname = $_POST['name3'];
$password = $_POST['password'];
     $sql="INSERT INTO `users`(`fname`, `lname`,`phone_no`, `email`,`user_name`, `password`) VALUES ('$fname', '$lname','$phone', '$email','$uname', '$password')";
	mysqli_query($con,$sql)
	if ($con->query($sql) === FALSE) {
 echo "Error: " . $sql . "<br>" . $conn->error;
 if(isset($_POST["submit"]))
{
 $sql="INSERT INTO users (`fname`, `lname`,`phone_no`, `email`,`user_name`, `password`) VALUES ('$fname', '$lname','$phone', '$email','$uname', '$password')";
 mysqli_query($con,$sql);
 echo '<script language="javascript">';
    echo 'window.close();';  
    echo 'alert("Account created please sign in!!");';
    echo 'window.open("try3.php");';
    echo '</script>';
}
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";


$con =mysqli_connect($servername, $username, $password, $dbname);
if($con){
	echo "Connected";
}
if(isset($_POST["submit"]))
{
	mysqli_query($con,"INSERT INTO users (`fname`, `lname`,`phone_no`, `email`,`user_name`, `password`) VALUES ('$fname', '$lname','$phone', '$email','$uname', '$password')");
}

-->
 
</head>
<?php
if(isset($_POST["submit"])){
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

	  $fname = $_POST['name'];
$lname = $_POST['name1'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$uname = $_POST['name3'];
$pass=$_POST['password'];
$sql = "INSERT INTO users (`fname`, `lname`,`phone_no`, `email`,`user_name`, `password`) VALUES ('$fname', '$lname','$phone', '$email','$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
	 require 'phpmailer/PHPMailerAutoload.php';
 $mail=new PHPMailer;
 $mail->isSMTP();
 $mail->Host='smtp.gmail.com';
 $mail->Port=587;
 $mail->SMTPAuth=true;
 $mail->SMTPSecure='tls';
 
 $mail->Username='alrichkudelak1999@gmail.com';
 $mail->Password='######Enter u r Mail Passwd########';
 
 $mail->setFrom('alrichkudelak1999@gmail.com','Canteen@frcrce.in');
 $mail->addAddress(''.$email, 'user1');
 $mail->addReplyTO('alrichkudelak1999@gmail.com');
 
 $mail->isHTML(true);
 $mail->Subject='Frcre Canteen';
 $mail->Body='<h1 align=center>You have sucessfully registered</h1><br>
				<h4 align=center>Thank You!! Please Login for Online Ordering..</h4><br>
				<h6>Please Visit Again <br></h6>';

if(!$mail->send()){
	echo "Error OCcured While Sending email";
}
else{
	echo "Email Sucessful!!";
}
    echo "New record created successfully";
	 echo '<script language="javascript">';
    echo 'window.close();';  
    echo 'alert("Account created please sign in!!");';
    echo 'window.open("log.php");';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>


<style>

body {
    background: url("bgimg2.jpg")no-repeat;
	background-attachment: fixed;
    background-size: cover;
    display: grid;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    width: 50rem;
    height: 60rem;
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);   
    border-radius: 5px;
    background-color: rgba(255, 255, 255, .15);
    
    backdrop-filter: blur(5px);
}
input[type=text],[type=password], select {
	
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]{
width:90%;
background-color: green;
color:white;
padding: 14px 10px;
margin: 8px 0;
border-radius: 4px;
cursor:pointer;
}
input[type=button]:hover{
background-color:#36ef2a
}
img{
border-radius:100%;
}

</style>
<script>

      function validateRegEx(regex, input, helpText, helpMessage) {
     
        if (!regex.test(input)) {
          
          if (helpText != null)
            helpText.innerHTML = helpMessage;
          return false;
        }
        else {

          if (helpText != null)
            helpText.innerHTML = "";
          return true;
        }
      }

      function validateNonEmpty(inputField, helpText) {
       
        return validateRegEx(/.+/,
          inputField.value, helpText,
          "Please enter a value.");
      }

      function validateLength(minLength, maxLength, inputField, helpText) {
        
        return validateRegEx(new RegExp("^.{" + minLength + "," + maxLength + "}$"),
          inputField.value, helpText,
          "Password should be atleast  " + minLength + 
          "Characters");
      }
      function validatePhone(inputField, helpText) {
       
        if (!validateNonEmpty(inputField, helpText))
          return false;

        return validateRegEx(/^\d{3}-\d{3}-\d{4}$/,
          inputField.value, helpText,
          "Please enter a phone number (for example, 123-456-7890).");
      }

      function validateEmail(inputField, helpText) {
        
        if (!validateNonEmpty(inputField, helpText))
          return false;
        return validateRegEx(/^[\w\.-_\+]+@[\w-]+(\.\w{2,3})+$/,
          inputField.value, helpText,
          "Please enter an email address(for example, fr.crce@gmail.com).");
      }

      function RegisterUser(form) {
        if (validateNonEmpty(form["name"], form["name_help"]) &&
		validateNonEmpty(form["name1"], form["lname_help"]) &&
		validatePhone(form["phone"], form["phone_help"]) &&
		validateNonEmpty(form["name3"], form["uname_help"]) &&
		validateLength(8, 25, form["password"], form["password_help"]) &&
          validateEmail(form["email"], form["email_help"])) {
          form.submit();
		  
        } else {
          alert("Please Check if any required fields missed.");
        }
      }
   </script>
  <body onload="document.getElementById('message').focus()">
  <form action="register11.php" method="post">
 <div class="container">
 <center>
 <font color=white>
 <h1>Create a New Account?</b></h1>
      <img src="images\person.png" width="100" alt="Retry" />
    

	
	<h2>Enter Following Details</h2>
	<p>[<b>Note:</b>Fields markes with '*' are requiered fields]</p>
	<br><br>
	 <div class="field">
       First Name*:
        <input id="name" name="name" type="text" size="32"
		placeholder="Please enter your Name" onblur="validateNonEmpty(this, document.getElementById('fname_help'))"  required />
        <span id="fname_help" class="help"></span>
      </div><br><br>
	  <div class="field">
      Last Name*:
        <input id="name1" name="name1" type="text" size="32"
		placeholder="Please enter your Name" onblur="validateNonEmpty(this, document.getElementById('lname_help'))" required />
        <span id="lname_help" class="help"></span>
      </div><br><br>
	  <div class="field">
       Phone Number*:
        <input id="phone" name="phone" type="text" size="32"
         placeholder="Please enter your Phone no" onblur="validatePhone(this, document.getElementById('phone_help'))" required />
        <span id="phone_help" class="help"></span>
      </div><br><br>
      <div class="field">
	   Enter E-mail*:
        <input id="email" name="email" type="text" size="32"
         placeholder="Please enter your E-mail address" onblur="validateNonEmpty(this, document.getElementById('email_help'))" required />
        <span id="email_help" class="help"></span>
		</div><br><br>
		<div class="field">
        User Name*:
        <input id="name3" name="name3" type="text" size="32"
         placeholder="Please enter your User Name" onblur="validateNonEmpty(this, document.getElementById('uname_help'))" required />
        <span id="uname_help" class="help"></span>
      </div><br><br>
	  <div class="field">
        Password*:
        <input id="password"  type="password" name="password" type="text" size="32"
		placeholder="Please enter your Password" onblur="validateLength(8, 25, this, document.getElementById('password_help'))" required />
        <span id="password_help" class="help"></span>
      </div><br><br>
	  <input type="submit" value="submit" name="submit" onclick="RegisterUser(this.form)"/>
	  </font>
	  <br><br><br>
	  
	  <pr>Already a User?<a style='color:black' href="log.php"> Login</a></pr>
	</center>
</div>	
</form>
  </body>
</html>