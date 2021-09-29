

<html>
  <head>
    <title>Forgot Password</title>

    <link rel="stylesheet" type="text/css" href="#" />

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
.btn{
width:50%;
background-color: #50B3C1;
color:white;
padding: 14px 10px;
margin: 8px 0;
border-radius: 8px;
cursor:pointer;
}
.btn:hover{
background-color:#B4E0E7
}
  </style>

  <body>
 <div class="container">
 <center>
 <h1>Forgot Password?</b></h1>
    
    <form name="orderform" action="log.html" method="POST">
	<br>
	<h2>Please fill the following details to reset your password</h2>
	<br><br>
	 
	  <div class="field">
       <input type="password" id="pass1" name="pass1" placeholder="Enter your password" required autofocus>
	<input type="password" id="pass2" name="pass2" placeholder="Confirm Your password" required>
      </div><br><br>
       
	  <button class="btn" onclick="return validate();" type="submit">
                    Change Password</button>
	  <br><br><br>
	  <pr>Already a User?<a style='color:black' href="log.html"> Login</a></pr>
	</center>
</div>	
 <script>
  function validate(){
	if (pass1.value != pass2.value) { 
   alert("Your password and confirmation password do not match.");
   pass2.focus();
   return false; 
	}
  }
  </script>
    </form>
  </body>
</html>




