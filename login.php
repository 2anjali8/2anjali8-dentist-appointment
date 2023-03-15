<?php
$con = mysqli_connect('localhost', 'root', '','simplydenty');
if (isset($_POST['email'])){
	$txtEmail=$_POST['email'];
	$txtPass=$_POST['psw'];
	$sql="SELECT * FROM USER WHERE EMAIL='".$txtEmail."'AND password='".$txtPass."'limit 1";
	
	$result=mysqli_query($con,$sql); 
	if($txtEmail=="drishtirajai7@gmailcom"&& $txtPass=="Alpha@1234"){
	header("Location: http://localhost/SimplyDenty/appointments.php");
	}
	if(mysqli_num_rows($result)==1){
		echo "<center><img src='Dental logo.png' style='height:300px;width:300px;'></center>";
		echo "<center><h1>Login successful!</h1></center>";
		
		
	}
	else{
		echo "Enter correct details ";
		exit();
	}
}


?>
<body style="background-color:#F0ECD4;">
<center><a href="homepage.html" style='font-size:20px;'> Continue to Smile Denty</a></center>
</body>