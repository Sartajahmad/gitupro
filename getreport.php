<?php
#Create Connection
	$con=mysqli_connect("localhost","root","root");
	#Select Database
	mysqli_select_db($con,"CollegeDb");
	#Create Query
	$query="select * from studentinfo";
	$result=mysqli_query($con,$query);
		echo "<table class='table table-striped'>";
		
	while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {

		echo "<tr>";
		echo "<td> $row[0]</td> <td> $row[1] </td> <td> $row[2]</td>";
		echo "</tr>";	

	}
	echo "</table>";


?>