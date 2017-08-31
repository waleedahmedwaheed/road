<?php require_once('../../conn/db.php'); 
session_start();

$fid = $_POST['fid'];
$rate = $_POST['rate'];

$updateSQL = "UPDATE fuel_rate SET rate='$rate' WHERE fid='".$fid."'";

  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());

echo '<script> document.location = "fuel_rate.php"; </script>'; 

?>
