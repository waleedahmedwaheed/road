<?php require_once('../../conn/db.php'); 
session_start();

$v_id = $_GET['v_id'];

$updateSQL = "UPDATE vehicles SET v_status=1 WHERE v_id='".$v_id."'";

  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());

echo '<script> document.location = "vehicles.php"; </script>'; 

?>
