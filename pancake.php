<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = "";

	$conn = new mysqli($dbhost, $dbuser, $dbpass);
	if($conn->connect_error){
		die("Connection failed : " . $conn->connect_error);
	}

	
	/*mysql_select_db('student') or die('Error');*/

	if($conn->select_db('student4') === FALSE){
		$query = 'CREATE DATABASE student5';
		if($conn->query($query) === TRUE){
			echo "Database created successfully";
		}
		else{
			echo "Creation failed";
			$conn->error;
		}
	}
	else{
		$regno = $_POST['regno'];
		$name = $_POST['fname'];
		$fname = $_POST['ffname'];
		$table = 'studnets';
		mysqli_query($conn,"INSERT INTO students (regno, name,fname) VALUES('$regno','$name','$fname')");
		if(mysqli_affected_rows($conn)>0){
			echo "Student detalis added.";
			//echo "<a href="form.html">Go Back</a>";
		}
	else{
			echo "Data not added.";
			echo $conn->error();
		}
		
	}

	
	$conn->close();
?>