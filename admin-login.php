<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','simplydenty');

// get the post records
$txtEmail = isset($_POST['emailtxt']) ? $_POST['emailtxt'] : '';
	$txtPsw = isset($_POST['pswtxt']) ? $_POST['pswtxt'] : '';



	
	
	$sql="SELECT * FROM USER WHERE EMAIL='".$txtEmail."'AND password='".$txtPsw."'limit 1";
	
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	
	
	

if($row['password']==$txtPsw){
	
		
		echo "<center><img src='Dental logo.png' style='height:300px;width:300px;'></center>";
		echo "<center><h1>Welcome admin!</h1></center>";
		echo "<center><a href='appointments.php'>Click here to view scheduled appointments</a></center>";
		
		
	}
	else{
		echo "Enter correct details"; 
	}
?>