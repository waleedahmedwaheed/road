<?php require_once('../../conn/db.php'); 

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
    
    
    <?php include ('header.php'); ?>


    
    <?php include ('sidemenu.php'); ?>
    
    
    <div class="content" style="overflow: scroll;">
        
        <div class="header">
          <h1 class="page-title">Admin Panel</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            </ul>
        
      
	    <table id="example" class="display dataTable" cellspacing="0" role="grid" aria-describedby="example_info" style="width: 90%;background-color: white;">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Detail: activate to sort column ascending">Name</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Type</th>
<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Status</th>
	        </tr>
			</thead>
<tfoot>
<tr>
<th rowspan="1" colspan="1">ID</th>
<th rowspan="1" colspan="1">Name</th>
<th rowspan="1" colspan="1">Type</th>
<th rowspan="1" colspan="1">Status</th>
</tr>
</tfoot>
<tbody>
             
			 <?php
	$qry = "SELECT * FROM vehicles";
	mysql_select_db($database_dbconfig, $dbconfig);
	$result = mysql_query($qry, $dbconfig) or die(mysql_error());
	while($rows = mysql_fetch_assoc($result))
	{
		$v_id = $rows["v_id"];
		$v_name = $rows["v_name"];
		$type = $rows["type"];
		$v_status = $rows["v_status"];
	?>
			 <tr>
                <td class="sorting_1" align="center"><?php echo $v_id; ?></td>
                <td align="center"><?php echo $v_name; ?></td>
                <td align="center"><?php switch($type)
				{
					case 1 : echo "Economic"; break;
					case 2 : echo "Business"; break;
				}
				?></td>
                <td align="center"><?php echo $v_status; ?></td>
                
				 <td align="center"> 
				 <?php
				 if($status<>1)
				 {
					 ?>
				<a href="add_vehicles.php?v_id=<?php echo $v_id; ?>" style="color:blue;">Edit</a>
					&nbsp;
				 <a href="delete_vehicle.php?v_id=<?php echo $v_id; ?>" onClick="return confirm('Are you sure to want to deactive this vehicle?')" style="color:red;">Delete</a></td>
				 <?php } ?>
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
