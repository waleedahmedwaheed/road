<?php require_once('../../conn/db.php');

//error_reporting(0);
//error_reporting(E_ERROR | E_PARSE );

$v_name = $_POST['v_name'];
$type = $_POST['type'];
$v_id = $_POST['v_id'];
$action = $_POST['action'];

if($action=="save")
{

$updateSQL = "Insert into vehicles (v_name,type) values ('$v_name','$type')";
  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());
//$qry = "INSERT INTO property(location)VALUES ('21122')";
//$result = mysql_query($qry);

if($Result1)
{
	//echo "Property Added";
	echo '<script type="text/javascript">alert("Record added");</script>';
	echo '<script type="text/javascript">window.location = "add_vehicles.php"</script>';
}
else
{
	echo '<script type="text/javascript">alert("Record Not Added");</script>';
	//echo $insertSQL;
}
}

else
{

$updateSQL = "Update vehicles set v_name = '$v_name' , type = '$type' where v_id = '$v_id'";
  mysql_select_db($database_dbconfig, $dbconfig);
  $Result1 = mysql_query($updateSQL, $dbconfig) or die(mysql_error());
//$qry = "INSERT INTO property(location)VALUES ('21122')";
//$result = mysql_query($qry);

if($Result1)
{
	//echo "Property Added";
	echo '<script type="text/javascript">alert("Record updated");</script>';
	echo '<script type="text/javascript">window.location = "add_vehicles.php"</script>';
}
else
{
	echo '<script type="text/javascript">alert("Record Not Updated");</script>';
	//echo $insertSQL;
}	
	
}
?>
