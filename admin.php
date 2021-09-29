<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <title>ADMIN</title>
    <script>
        function validate(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if ( username == "admin12" && password == "12345678"){
                document.write("Login successfully");
            }
            else{
                alert("Invalid Username/Password");
            }
        }
    </script>
    <style>
	* {box-sizing: border-box;}
    .button{
          
         border: 2px solid ; 
         color:white; 
         font-size: 22px;
         padding: 4px 32px;
         cursor:pointer;
         border-radius:12px;
		}
    .ip{
        color:blue;
		width: 100%;
		padding: 10px;
		outline: none;
		border-radius:8px;
	}
	.ip:focus {
		border: 2px solid dodgerblue;
	}

   .button1 {
	background-color: white; 
	color: purple; 
	border: 2px solid red;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

	}

	.button1:hover {
	background-color:pink;
	color: white;
	}
	.input-container {
	display: -ms-flexbox; /* IE10 */
	display: flex;
	width: 100%;
	margin-bottom: 15px;
	}
	.icon {
	padding:10px;
	background: dodgerblue;
	color: white;
	min-width: 50px;
	text-align: center;
	border-radius:8px;
	}
   h1
   {
      color:white;
   }
   .bg
   {
	background-image:url("admn.png");
   }
   img{
   border-radius:100%;}
    </style>
</head>



<body class='bg' >
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style='text-align: center;'>
    <div style='text-align: center; color:red;'>
        <h1>WELCOME ADMIN</h1>
                <br>
                <img src="Images\user.png"  width="75" height="75">
    </div>
    <br>
	
	<form>
	<table style='margin:auto' >
    <div class="input-container">   
	<tr>
		<td><i class="fa fa-user icon"></i></td>
		<td><input class='ip' type='text' name="username" id="username" placeholder="username" required></td>
	</tr>
	</div>
		
		
    <div class="input-container"> 
	<tr>
        <td><i class="fa fa-key icon"></i></td>
        <td><input class='ip' type='password' name="password" id="password" placeholder="password" required></td>      
    </tr>
	</table>   
	<br>
	</form>
            
	</div>
            <div style='text-align: center;'>
                 <input  class="button button1" type='submit' value='Log In' onclick='validate()'>
            </div>
</div>
</body>

</html>