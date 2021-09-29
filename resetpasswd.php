<html>
  <head>
    <title>Forgot Password</title>
<?php  
 session_start();  
 if(isset($_SESSION["usernamme"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
    <link rel="stylesheet" type="text/css" href="#" />

     </head>

<style>
body {
    background: url("bgimg2.jpg")no-repeat;
    background-size: cover;
    display: grid;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    width: 50rem;
    height: 30rem;
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);   
    border-radius: 5px;
    background-color: rgba(255, 255, 255, .15);
    
    backdrop-filter: blur(5px);
}
input[type=email], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]{
width:50%;
background-color: #50B3C1;
color:white;
padding: 14px 10px;
margin: 8px 0;
border-radius: 8px;
cursor:pointer;
}
input[type=submit]:hover{
background-color:#B4E0E7
}
img{
border-radius:100%;
}
  </style>

  <body>
  <form action="otp.php" method="post">
 <div class="container">
 <center>
 <font color="white">
 <h1>Forgot Password?</b></h1>
    
 
	<br>
	<h2>Please fill the following details to reset your password</h2>
	<br><br>
	    
	  <div class="field">
        Email:
        <input id="email" name="email" type="email" size="32"
         placeholder="Please enter your Email id" required/>
        <span id="phone_help" class="help"></span>
      </div><br><br>
      
       
	  <input type="submit" value="Continue" name="continue" />
	  <br><br><br>
	  <pr>Already a User?<a style='color:white' href="log.html"> Login</a></pr>
	  </font>
	</center>
</div>	

    </form>
  </body>
</html>
