<!--
session_start();
$otp=$_SESSION["otp"];
$pass=$_POST['passwd'];
if($pass == $otp)
{
unset($_SESSION["otp"]);
	echo '<script language="javascript">';
    echo 'window.close();';  
    echo 'alert("Otp Verified!!");';
    echo 'window.open("resetpassword3.php");';
    echo '</script>';
	 
}
else{
	echo '<script language="javascript">';
  echo 'window.close();';	
    echo 'alert("Error!!");';
	 echo 'window.open("resetpasswd.php");';
    echo '</script>';
}-->
 <?php
 session_start();
 ?>
 <html>
  <head>
  </head>
  <body>
  <?php
         $verify= $_POST['passwd'];
         echo $verify;

         if($_SESSION['otp']==$verify){
	echo '<script language="javascript">';
    echo 'window.close();';  
    echo 'alert("Otp Verified!!");';
    echo 'window.open("resetpassword3.php");';
    echo '</script>';}
          else {
			  echo '<script language="javascript">';
  echo 'window.close();';	
    echo 'alert("Error!!");';
	 echo 'window.open("resetpasswd.php");';
    echo '</script>';
		  }
       
       ?>
	    </body>
</html>