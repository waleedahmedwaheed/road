<?php require_once('../../conn/db.php'); 
 require_once('../../functions.php'); 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin </title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="../../dataTables/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../../dataTables/jquery.dataTables.min.js"></script>
<link type="text/css" href="../../dataTables/jquery.dataTables.css" rel="stylesheet">
<link type="text/css" href="../../dataTables/dataTables.tableTools.css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="../../dataTables/dataTables.tableTools.js"></script>



    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    
    <?php //include ('header.php'); ?>


    
    <?php //include ('sidemenu.php'); ?>
    
    
    <div class="content" style="overflow: scroll;margin-left:0px;">
        
        <div class="header">
          <h1 class="page-title">Driver Panel</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="#">1</a> <span class="divider">/</span></li>
            </ul>
        
      
	    <table id="example" class="display dataTable" cellspacing="0" role="grid" aria-describedby="example_info" style="width: 100%;background-color: white;">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Detail: activate to sort column ascending">User</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Contact</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Distance</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Fare</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Datetime</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Vehicle</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">From </th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">To</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Status</th>
	        </tr>
			</thead>
<tfoot>
<tr>
<th rowspan="1" colspan="1">ID</th>
<th rowspan="1" colspan="1">User</th>
<th rowspan="1" colspan="1">Contact</th>
<th rowspan="1" colspan="1">Distance</th>
<th rowspan="1" colspan="1">Fare</th>
<th rowspan="1" colspan="1">Datetime</th>
<th rowspan="1" colspan="1">Vehicle</th>
<th rowspan="1" colspan="1">From</th>
<th rowspan="1" colspan="1">To</th>
<th rowspan="1" colspan="1">Status</th>
</tr>
</tfoot>
<tbody>
             
			 <?php
	$qry = "SELECT * FROM booking";
	mysql_select_db($database_dbconfig, $dbconfig);
	$result = mysql_query($qry, $dbconfig) or die(mysql_error());
	while($rows = mysql_fetch_assoc($result))
	{
		$b_id = $rows["b_id"];
		$u_id = $rows["u_id"];
		$dist = $rows["dist"];
		$bk_rate = $rows["bk_rate"];
		$type = $rows["type"];
		$bk_status = $rows["bk_status"];
		$days = $rows["days"];
		$bk_dt = $rows["bk_dt"];
		$from_loc = $rows["from_loc"];
		$to_loc = $rows["to_loc"];
		$v_id = $rows["v_id"];
		$fare = $rows["fare"];
		$unit = $rows["unit"];
		$pk_time = $rows["pk_time"];
		$dr_time = $rows["dr_time"];
		$lon = $rows["lon"];
		$lat = $rows["lat"];
	?>
			 <tr>
                <td class="sorting_1" align="center"><?php echo $b = $b + 1; ?></td>
                <td align="center"><?php echo get_title(username,$u_id); ?></td>
                <td align="center"><?php echo get_title(contact,$u_id); ?></td>
                <td align="center"><?php echo $dist." - ".$unit; ?></td>
                <td align="center"><?php echo $fare." PKR"; ?></td>
                <td align="center"><?php echo $bk_dt; ?></td>
                <td align="center"><?php echo get_title(v_name,$v_id); ?></td>
                <td align="center"><?php echo $from_loc; ?></td>
                <td align="center"><?php echo $to_loc; ?></td>
                <td align="center"><?php switch($bk_status)
				{
					case 1 : echo "<span style='color:green;'>Picked</span>"; break;
					case 0 : echo "<span style='color:red;'>Not Picked</span>"; break;
				}
				?></td>
				 <td align="center"> 
				 <?php
				 if($bk_status<>1)
				 {
					 ?>
				 <a href="delete_booking.php?b_id=<?php echo $b_id; ?>" onClick="return confirm('Are you sure to want to pick this user?')" style="color:blue;">Want to Pick ?</a>
				 <?php } ?>
				 &nbsp;
				 <a href="../../user_loc.php?lon=<?php echo $lon; ?>&lat=<?php echo $lat; ?>&u_id=<?php echo $u_id; ?>"><img src="../../img/location.png" title="Location" alt="Get on Road" />
				 </td>
			  </tr>
	<?php 
	}
	?>
          </tbody></table>
  
    </div>
	
	<script>
$(document).ready(function(){
		$("#faxd").hide();
		//$("#faxs").hide();
    });
</script>
<script>
$(document).ready( function () {
    $('#example').dataTable( {
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "/dataTables/copy_csv_xls_pdf.swf"
        }
    } );
} );
</script>
    


  <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>
<?php
mysql_free_result($Recordset1);
?>
