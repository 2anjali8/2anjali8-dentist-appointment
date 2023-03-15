<!DOCTYPE html>
<html>
<head>
<title>Appointment information</title>
<style>
th{
	border: 1px solid black;
}
td{
	border: 1px solid black;
}
</style>

</head>
<body style="background:#FFF3E4">

<center><h1>Scheduled appointments</h1><center>
<table>
<tr>
<th>Appointment ID</th>
<th>Name</th>
<th>Phone</th>
<th>Height</th>
<th>Weight</th>
<th>Appointment time</th>
<th>Appointment date</th>

</tr>
<?php

$con = mysqli_connect('localhost', 'root', '','simplydenty');
$sql="select Pid,Pname,Pphone,Pheight, Pweight,Ptime,Pdate from patient";
$rs = mysqli_query($con, $sql);

if($rs->num_rows>0){
	while($row=$rs->fetch_assoc()){
		echo "<tr><td>".$row['Pid']."</td><td>".$row['Pname']."</td><td>".$row['Pphone']."</td><td>".$row['Pheight']."</td><td>".$row['Pweight']."</td><td>".$row['Ptime']."</td><td>".$row['Pdate']."</td><td></tr>";
		
	}
	echo "</table>";
}
else{
	echo "No details available";
}
$con->close();
?>
</table>
</body>
</html>