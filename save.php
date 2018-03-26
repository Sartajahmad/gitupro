<?php

	$name= $_POST["cname"];
	$email= $_POST["cemail"];
	$course= $_POST["ccourse"];
	

	echo "Server says hi!!!! $name";
	
	#Create connection_aborted
	mysql_connect("localhost","root","root");
	
	
	#select database
	mysql_select_db("CollegeDb");
	
	#Create  Query
	$query="insert into studentinfo(name,email,course)values('$name','$email','$course')";
	
	
	#execute query
	mysql_query($query);
	
	
	echo "record succesfully";


?>