<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','simplydenty');

// get the post records
$txtName = isset($_POST['appname']) ? $_POST['appname'] : '';
$txtEmail = isset($_POST['appemail']) ? $_POST['appemail'] : '';
$txtNum=isset($_POST['appnumber']) ? $_POST['appnumber'] : '';
$txtAdd=isset($_POST['appadd']) ? $_POST['appadd'] : '';
$txtWeight=isset($_POST['appweight']) ? $_POST['appweight'] : '';
$txtHeight=isset($_POST['appheight']) ? $_POST['appheight'] : '';
$txtBdate=isset($_POST['appbdate']) ? $_POST['appbdate'] : '';
$txtAppdate=isset($_POST['appdate']) ? $_POST['appdate'] : '';
$txtApptime=isset($_POST['apptime']) ? $_POST['apptime'] : '';



// database insert SQL code
$sql = "INSERT INTO `patient` ( `Pname`, `Pphone`, `Padd`, `Pemail`, `Pweight`, `Pbdate`, `Pheight`, `Ptime`, `Pdate`) VALUES ( '$txtName', '$txtNum', '$txtAdd','$txtEmail','$txtWeight','$txtBdate','$txtHeight','$txtApptime','$txtAppdate')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	echo "<center><img src='Dental logo.png' style='height:300px; width:300px;'></center>";
	echo "<center><h1 style='color:#9559B2;'>Your appointment is confirmed!</h1></center>";

	
	
}



?>
<body style="background-color:#F0ECD4;">
<center><a href="details.php" style='font-size:20px;'> Click for appointment details</a></center>
<center><a href="homepage.html" style='font-size:20px;'> Continue to website</a></center>
</body>