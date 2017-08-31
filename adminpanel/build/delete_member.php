<?php require_once('../../conn/db.php'); 
session_start();

$u_id = $_GET['u_id'];

$updateSQL = "UPDATE users SET status=1 WHERE u_id='".$u_id."'";

  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());

echo '<script> document.location = "members.php"; </script>'; 

?>
