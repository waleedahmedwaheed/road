<?php
include_once('conn/db.php');

function get_title($mode,$text){
switch($mode)
{
case rate:  $sql2 = "select rate title from fuel_rate where fid ='$text'"; break;   
case username:  $sql2 = "select name title from users where u_id ='$text'"; break;   
case v_name:  $sql2 = "select v_name title from vehicles where v_id ='$text'"; break;   
case contact:  $sql2 = "select contact title from users where u_id ='$text'"; break;   
case booking:  $sql2 = "select count(b_id) title from booking where bk_status ='$text'"; break;   
 
}
$result = mysql_query($sql2);
mysql_select_db($database_dbconfig, $dbconfig);
$rows = mysql_fetch_assoc($result);
$title	= $rows["title"];
return $title;
}
?>