<?php
include_once('conn/db.php');
include_once('functions.php');

$from_loc 			= $_REQUEST["from_loc"];
$to_loc				= $_REQUEST["to_loc"];
$dist 				= $_REQUEST["dist"];
$unit				= $_REQUEST["unit"];
$bk_rate			= $_REQUEST["bk_rate"];
$u_id				= $_REQUEST["u_id"];
$type				= $_REQUEST["type"];
$fare				= $_REQUEST["fare"];
$v_id				= $_REQUEST["v_id"];
$days				= $_REQUEST["days"];
$pk_time			= $_REQUEST["pk_time"];
$dr_time			= $_REQUEST["dr_time"];
$lon				= $_REQUEST["lon"];
$lat				= $_REQUEST["lat"];
$dr_time			= $_REQUEST["dr_time"];
$bk_dt 				= date('Y-m-d H:i:s');

$url = "http://115.186.134.162/IDS_SMS/send_sms.php?user_name=waleed&user_password=786www&mobile_no=".get_title(contact,$u_id)."&sms_body=Thanks%20for%20Booking%20with%20Get%20on%20Road.Our%20Driver%20will%20come%20to%20you%20soon.Thanks";

		$ch = curl_init();
		$timeout = 30;
		curl_setopt ($ch, CURLOPT_URL, $url); 
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$response = curl_exec($ch);
		curl_close($ch); 
		$API_RESPONSE = substr($response, 0, 98); 

//echo $response; 

		
					$qrys = "INSERT INTO booking(u_id,dist,bk_rate,type,days,bk_dt,from_loc,to_loc,v_id,fare,unit,pk_time,dr_time,lon,lat) 
					VALUES('$u_id','$dist','$bk_rate','$type','$days','$bk_dt','$from_loc','$to_loc','$v_id','$fare','$unit','$pk_time','$dr_time','$lon','$lat')";
					mysql_select_db($database_dbconfig, $dbconfig);
					if (mysql_query($qrys)) {
						echo "<script type='text/javascript'>alert('Ride Booked Successfully');</script>";
						//echo $response;
						//echo "<script type='text/javascript'>window.location='login.php';</script>";
					} else {
						echo "Error: " . $qrys . "<br>" ;
					}
					
		
		//mysqli_close($conn);
?>