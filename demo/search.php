<?php
	include("config.php");
	$keywords = $_POST['keywords'];
	$sql = "select*from germannews where city like '%$keywords%'";
	$result = mysqli_query($con, $sql); 
	if (!$result){
		die('无搜索记录：'.mysql_error());	
	}
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
?>