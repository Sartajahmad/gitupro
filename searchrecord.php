<?php 

		$search =  $_POST["csearch"];
	#Create connection
	
	$con=mysqli_connect("localhost","root","root");

	#select database
	
	mysqli_select_db($con,"collegedb");

	#Create Query
	
	$query="select *from studentinfo where name='$search'";

	#excute query
	
	$result=mysqli_query($con,$query);

	echo "<table class='table table-striped'>";
		
	while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {

		echo "<tr>";
		echo "<td> $row[0]</td> <td> $row[1] </td> <td> $row[2]</td>";
		echo "</tr>";	

	}
	echo "</table>";

 ?> 