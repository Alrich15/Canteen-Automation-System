<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <title>User Login</title>

    <script>
    
    </script>
    <style>
	
	* {box-sizing: border-box;}
    .button{
          	  
  		  border: 2px solid;
 		 color: white;
 		 padding: 10px 32px;
		 font-size: 15px;
 		 margin: 4px 2px;
 		 cursor: pointer;
		border-radius: 12px;
         
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
	color: blue; 
	border: 2px solid red;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

	}

	.button1:hover {
	background-color:pink;
	color: black;
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
	   border-radius:100%
   }

  
    </style>
</head>
<body class="bg">
<br>
<br>
<br>
<br>
<br>
<br>

<div style='text-align: center;'>
    <div style='text-align: center; color:red;'>
        <h1>WELCOME!</h1>
                <br>
                <img src="Images\user.png"  width="75" height="75">
    </div>
    <br>
	
<td class="signin">
                          
                                <form action="signin.php" method="POST">
								<table style='margin:auto' >
    <div class="input-container">   
	<tr>
		<td><i class="fa fa-user icon"></i></td>
                                    <td><input  class='ip' type="text" name="uname" placeholder="Enter Username" class='inp', required><br></td>
									</tr>
	</div>
	    <div class="input-container"> 
	<tr>
        <td><i class="fa fa-key icon"></i></td>
                                    <td><input class="ip" type="password" name='passwd' placeholder="Enter Password" class='inp', required><br></td>
									 </tr>
	</table>   
	<br>
	</div>
	                    <div style='text-align: center;'>
                                    <input class="button button 1" type="submit" name="submit2" value='Sign in'>
                  </div>
                                
								
								<center>
								<!--<div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>-->
    <p><a href="resetpasswd.php">Forgot</a> password?.</p></center>
  </form>
								</body>

</html>