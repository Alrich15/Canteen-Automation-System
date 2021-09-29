<html>
  <head>
    <title>Forgot Password</title>

    <link rel="stylesheet" type="text/css" href="#" />

    <script type="text/javascript">
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

      
      function validatePhone(inputField, helpText) {
       
        if (!validateNonEmpty(inputField, helpText))
          return false;

        return validateRegEx(/^\d{4}$/,
          inputField.value, helpText,
          "Please enter OTP received on your registered mobile number");
      }

     

      function RegisterUser(form) {
        if (validatePhone(form["phone"], form["phone_help"])) {
          form.submit();
		  
        } else {
          alert("Please enter valid OTP");
        }
      }
    </script>
  </head>
  <style>
body {
    background: url("RegBg.jpg")no-repeat;
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
input[type=text],[type=password], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=button]{
width:50%;
background-color: #50B3C1;
color:white;
padding: 14px 10px;
margin: 8px 0;
border-radius: 8px;
cursor:pointer;
}
input[type=button]:hover{
background-color:#B4E0E7
}
img{
border-radius:100%;
}
  </style>

  <body onload="document.getElementById('message').focus()">
 <div class="container">
 <center>
 <h1>Forgot Password?</b></h1>
    
    <form action="verifyotp.php" method="POST">
	<br>
	<h2>Please fill the following details to reset your password</h2>
	<br><br>
	 
	  <div class="field">
        OTP
        <input name="passwd" type="text" size="32"
         placeholder="Please enter OTP received on your registered emailid" required/>
      </div><br><br>
      
       
	  <input type="submit" name="sub" value="Submit"/>
	  <br><br><br>
	  <pr>Already a User?<a style='color:black' href="log.html"> Login</a></pr>
	</center>
</div>	
    </form>
  </body>
</html>
