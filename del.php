 <?php
$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "blog_samples";

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nam = $_POST['name1'];
// sql to delete a record
#$sql = "DELETE FROM tblproduct WHERE name=$nam ";
$sql ="DELETE FROM tblproduct WHERE name = '$nam'" ;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	 echo '<script language="javascript">';
    echo 'window.close();';
    echo 'alert("Deleted!!!");'; 
    echo 'window.open("ad.php");';
    echo '</script>';
} else {
	
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>