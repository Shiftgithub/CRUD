 <?php
session_start();

$edit_roll_no='';
$edit_name='';
$edit_email='';
$update=false;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


// Create connection $ Check COnnection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

if(isset($_GET['save'])
){
	$roll_no=$_GET['roll_no'];
	$name=$_GET['name'];
	$email=$_GET['email'];

	
	//Insert Query
	$sql = "INSERT INTO stud(roll_no,name,email) VALUES('$roll_no','$name','$email')";

	$conn->query($sql) or die($conn->error);

	$_SESSION['message']="Record has been Saved";
	$_SESSION['msg_type']="success";

	//header("loaction: index.php");
}


if(isset($_GET['delete'])){

	$roll_no=$_GET['delete'];

	//Delect Query
	$sql="DELETE FROM stud WHERE roll_no = $roll_no";
	$conn->query($sql) or die($conn->error());

	$_SESSION['message']="Record has been Delected";
	$_SESSION['msg_type']="danger";

	//header("loaction: index.php");

}


if(isset($_GET['edit'])){

	$roll_no=$_GET['edit'];
	$update = true;

	$result = $conn->query("SELECT * FROM stud WHERE roll_no=$roll_no") or die($conn->error());


	while($row = $result->fetch_assoc()){
		$edit_roll_no=$row['roll_no'];
		$edit_name=$row['name'];
		$edit_email=$row['email'];
	}

}

if(isset($_GET['update'])){
	$roll_no=$_GET['roll_no'];
	$name=$_GET['name'];
	$email=$_GET['email'];

	$conn->query("UPDATE stud SET name='$name', email='$email' WHERE roll_no=$roll_no") or die($conn->error());
	$_SESSION['message']="Record has been Updated!";
	$_SESSION['msg_type']="warning";
}

$conn->close();

//require 'index.php';
?> 