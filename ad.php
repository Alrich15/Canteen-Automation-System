<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dm="blog_samples";

$conn = new mysqli($servername, $username, $password,$dm);
if($conn){
echo "connected "; }

if(isset($_POST["add"])){
	echo "sdlvmc,Xd";
$output_dir = "product-images/";	

$name = $_POST['name'];
$code = $_POST['code'];
$price = $_POST['price'];
$image= $_POST['image'];
$imgg = $output_dir.$image;
#$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      
$sql = "INSERT INTO tblproduct (`name`, `code`,`image`,`price`) VALUES ('$name', '$code','$imgg', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	 echo '<script language="javascript">';  
    echo 'alert("P!!");';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

	

?>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>

<h2>ADMIN PANEL1</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">ADD</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">DELETE</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Logout</button>
</div>

<div id="London" class="tabcontent">
<form method="post" action="ad.php">
  <h1>ADD PRODUCT</h1>
  Enter Prod Name:
   <input id="name" name="name" type="text" size="32" required />
   <br><br>
     Enter Prod code:
   <input id="name" name="code" type="text" size="32" required /><br><br>
     Enter Prod price:
   <input id="name" name="price" type="number" size="32" required /><br><br>
     Enter Prod Image:
   <input type="file" name="image" id="image" />  
                     <br /> 
   <input type="submit" value="add" name="add"/>
  
   </form>
</div>

<div id="Paris" class="tabcontent">
<form method="post" action="del.php">
  <h3>DELETE </h3>
  <p></p> 
       Enter Prod name:
   <input id="name1" name="name1" type="text" size="32" required /><br><br>
   <input type="submit" value="Delete" name=""delete"/>
   </form>
</div>

<div id="Tokyo" class="tabcontent">
<h1>Click below to log out..</h1>
<a href="try3.php"><h3>Logut</h3></a>
<!--

echo '<script language="javascript">';
    echo 'window.close();';
    echo 'alert("logging out!!!");'; 
    echo 'window.open("try3.php");';
    echo '</script>';
	
	-->
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
  
</script>
   
</body>
</html> 
