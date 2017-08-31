<?php
 include_once('conn/db.php');
 // session start
 session_start ();
 $user_check = $_SESSION['email'];
 
 //Query To fetch complete information of user

 $ses_sql = mysql_query ("select email from users where email= '$user_check'",$con );
 $row = mysql_fetch_assoc($ses_sql);
 $login_session = $row ['email'];
 if (!isset ($login_session))
 {
 	mysql_close ($con);
	
 }
?>
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
  				header ('location:index.php');
				}
			else
			{
				header ('location:login-register.php');  
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
		
		//mysqli_close($conn);
?>