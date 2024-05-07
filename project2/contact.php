<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_new23');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];


// database insert SQL code
$sql = "INSERT INTO `tbl_new23` (`Id`, `fldName`, `fldEmail`) VALUES ('0', '$txtName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
