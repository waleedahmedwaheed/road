<?php
include_once('conn/db.php');
session_start();
$email 			= $_REQUEST["email"];
$password		= $_REQUEST["password"];


		$qry = "SELECT * FROM users WHERE email='$email' and password='$password' and status = 0";
		mysql_select_db($database_dbconfig, $dbconfig);
		$result = mysql_query($qry, $dbconfig) or die(mysql_error());
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_NAME'] = $member['email'];
				session_write_close();
  				echo "<script type='text/javascript'>window.location='index.php';</script>";
				}
			else
			{
				echo "<script type='text/javascript'>alert('Invalid email or password');</script>";    
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
		
		//mysqli_close($conn);
?>