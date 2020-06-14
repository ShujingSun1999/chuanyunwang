<html>   
	<head>  
		<meta charset="utf-8" />  
	</head>
	<body>	
<?php
	$ser="localhost";
	$user="root";
	$pass="googlegirl2020";
	$db="newstest";
	$sqlid="3308";
	$con = mysqli_connect($ser,$user,$pass,$db,$sqlid);
	if($con = mysqli_connect($ser,$user,$pass,$db,$sqlid)){
		echo "连接成功";
	}
	else{
		echo "连接失败";
	}

	$result = mysqli_query($con, "SELECT * FROM germannews"); 
	echo"<table border='1'> 
	<tr>
	<th>id</th>
	<th>city</th>
	<th>time</th>
	<th>news</th>
	</tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>"; //新一行
		echo "<td>".$row['id']."</td>"; //第一个单元格
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['news']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
?>
</body>
</html>