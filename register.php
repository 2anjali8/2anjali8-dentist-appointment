<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','simplydenty');

// get the post records
$txtName = $_POST['nametxt'];
$txtEmail = $_POST['emailtxt'];
$txtPsw = $_POST['pswtxt'];


// database insert SQL code
$sql = "INSERT INTO `user` ( `name`, `email`, `password`) VALUES ( '$txtName', '$txtEmail', '$txtPsw')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	echo "<center><img src='Dental logo.png' style='height:300px;width:300px;'></center>";
	echo "<center><h1>Registration Successful!</h1></center>";
	
	
}

?>
<body style="background-color:#F0ECD4;">
<center><a href="homepage.html" style='font-size:20px;'> Continue to Smile Denty</a></center>
</body>