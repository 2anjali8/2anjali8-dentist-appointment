<!DOCTYPE html>
<html>
<head>
<style>
table{
	border: 2px solid black;
	align:center;
	margin-top:100px;
	margin-left:650px;
	font-size:30px;
}
</style>
<title>Appointment information</title>
</head>
<body style="background:#FFF3E4">
<table>
<tr>
<th>Appointment ID</th>

</tr>
<?php

$con = mysqli_connect('localhost', 'root', '','simplydenty');
$sql="select Pid from patient order by Pid DESC LIMIT 1";
$rs = mysqli_query($con, $sql);

if($rs->num_rows>0){
	while($row=$rs->fetch_assoc()){
		echo "<tr><td>".$row['Pid']."</td></tr>";
		echo"<img src='Dental Logo.png' style='height:200px; width:200px;'>";
		echo "<center><h1>Note your appointment id.</h1></center>";
		
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