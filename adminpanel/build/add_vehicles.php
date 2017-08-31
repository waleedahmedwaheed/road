<?php require_once('../../conn/db.php'); 

session_start();

$qry = "SELECT * FROM vehicles where v_id = '".$_GET["v_id"]."'";
	mysql_select_db($database_dbconfig, $dbconfig);
	$result = mysql_query($qry, $dbconfig) or die(mysql_error());
	$rows = mysql_fetch_assoc($result);
		$v_id = $rows["v_id"];
		$v_name = $rows["v_name"];
		$type = $rows["type"];
		$v_status = $rows["v_status"];
		
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
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
	
	<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#price,#area,#bath,#room,#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>

<script>
$('.test-xlarge,#description').unbind('keyup change input paste').bind('keyup change input paste',function(e){
    var $this = $(this);
    var val = $this.val();
    var valLength = val.length;
    var maxCount = $this.attr('maxlength');
    if(valLength>maxCount){
        $this.val($this.val().substring(0,maxCount));
    }
}); 
</script>

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
            <li><a>Vehicles</a></li>
	    </ul>
        
      
	  <div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Vehicles</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
   <form method="post" id="userForm"  action="save_vehicles.php">
   
   <input type="hidden" name="v_id" value="<?php echo $_GET["v_id"]; ?>" >   
   
<!-- start my properties list -->

            <!-- start property info -->
           
                                <label for="address">Vehicle Name *</label><br/>
                                <input type="text" name="v_name" id="v_name" value="<?php echo $v_name; ?>" class="test-input" maxlength="50" required />
                             
                               
                                <label for="state">Type *</label><br/>
                                <select name="type" id="type" class="input-xlarge" required>                                   
									<option value="">--Select--</option>
                                    <option value="1" <?php if($type==1) echo "selected"; ?>>Economic</option>
                                    <option value="2" <?php if($type==2) echo "selected"; ?>> Business</option>
                                    
                                </select>
                                
                               
	   
	    <div class="col-lg-4 col-lg-offset-4 col-md-4" style="margin-bottom: 10px;font-weight: bold;>
                <div class="formBlock">
                    <div> <center id="response">  </center> </div>
                </div>
            </div>
	   
					<?php if(isset($_GET['v_id']))
					{
					?>
					<input type="hidden" name="action" value="update" />
					<button class="btn btn-primary" type="submit"><i class="icon-save"></i> Update</button>
					<?php
					}
					else
					{
					?>	
					<input type="hidden" name="action" value="save" />
					<button class="btn btn-primary" type="submit"><i class="icon-save"></i> Submit </button>
					<?php
					}	
					?>
					
                   
       
 </form>
      </div>
     
	 
  </div>

</div>
	   
  
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
