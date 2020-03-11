 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection $ Check COnnection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

if(isset($_POST['save'])
){
	$name=$_POST['name'];
	$roll_no=$_POST['roll_no'];
	$email=$_POST['email'];

	$success=$conn->query("INSERT INTO stud(roll_no,name,email) VALUES('$roll_no','$name','$email')") or die($conn->error);
}

$conn->close();
?> 