<?php
include_once('conn/db.php');

$name 			= $_REQUEST["name"];
$contact		= $_REQUEST["contact"];
$email 			= $_REQUEST["email"];
$password		= $_REQUEST["password"];
$type			= $_REQUEST["type"];


		 $qry = "SELECT * FROM users WHERE email='".$email."'";
		 mysql_select_db($database_dbconfig, $dbconfig);
		$results = mysql_query($qry);
		if($results) {
			if (mysql_num_rows($results) > 0) {
				echo "<script type='text/javascript'>alert('Email already in use');</script>";
				}
				else{ 
					$qrys = "INSERT INTO users(name,email,contact,password,type) 
					VALUES('$name','$email','$contact','$password','$type')";
					mysql_select_db($database_dbconfig, $dbconfig);
					if (mysql_query($qrys)) {
						echo "<script type='text/javascript'>alert('User registered successfully');</script>";
						//echo "<script type='text/javascript'>window.location='login.php';</script>";
					} else {
						echo "Error: " . $qrys . "<br>" ;
					}
					}
		}
		else {
			die("Query failed");
		} 
		
		//mysqli_close($conn);
?>