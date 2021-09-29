<?php
session_start();

$servername = "localhost";
$username = "root";
$passwod = "";
$dbname = "wt";


$conn = new mysqli($servername, $username, $passwod, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$suname = $_POST['uname'];
$spass = $_POST['passwd'];

$sql = "SELECT `id`, `user_name`, `password` FROM `users` WHERE `user_name`='$suname' AND `password`='$spass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["usernamme"] = $suname;
    echo '<script language="javascript">';
    echo 'window.close();';
    echo 'window.open("home.php");';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'window.close();';
    echo 'alert("Invalid details!!!");'; 
    echo 'window.open("log.php");';
    echo '</script>';
}

if ($conn->query($sql) === TRUE) {
    
    echo 'sign in done';
	$conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	$conn->close();
}




?>


