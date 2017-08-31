<?php require_once('../../conn/db.php'); 
session_start();

$b_id = $_GET['b_id'];

$updateSQL = "UPDATE booking SET bk_status=1 WHERE b_id='".$b_id."'";

  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());

echo '<script> document.location = "bookings.php"; </script>'; 

?>
