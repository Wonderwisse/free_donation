<?php
session_start();
require_once "Connection.php";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
if(isset($_POST['btncst']))

{         
	
	$txtname	 	= 	$_POST['txtname'];
	$txtmobile		= 	$_POST['txtmobile'];	
	$txtaddress		= 	$_POST['txtaddress'];	
	$txtcity			= 	$_POST['txtcity'];	
	$txtstate			= 	$_POST['txtstate'];	
	$txtabout			= 	$_POST['txtabout'];	
		
	
		mysqli_query($con,"insert into needers set 
						name		=	'$txtname',
						mobile	=	'$txtmobile',
						address	=	'$txtaddress',						
						city		=	'$txtcity',						
						state		=	'$txtstate',
						about	=	'$txtabout'")or die('Query Not Working 2 : '.mysqli_error());		
	echo "alert('Needers Stored Success')";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kitchen Utensil Donation</title>

    <!-- Bootstrap Core CSS -->
    <link href="new/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="new/css/half-slider.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
		
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="MasterAdmin.php">Kitchen Utensil Donation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
			   <ul class="nav navbar-nav">
					
                    <li><a href="distribution.php">Distribution</a> </li>
                    <li><a href="needers.php">Needers</a> </li>
                    <li><a href="donation_info.php">Donated Details</a> </li>
                    <li><a href="feedbacks_view.php">Feedbacks</a> </li>
                    <li><a href="contacts_view.php">Contactus Details</a> </li>
                        
                   
			       	
					
		 </ul>
		 <ul class="nav navbar-nav navbar-right">				
				
				<li><a href="logout.php" style='color:#fff;'>Logout</a></li>
		</ul>	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
	
    
<br><br><br>
    <!-- Page Content -->
   <div class="container-fluid">
	
		<div class="row">

		
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background-color:#000;color:yellow;"><h3>Utensil Needers</h3></div>
					<div class="panel-body"> 
					
						
		<table class="table table-bordered">
							<form class="col-md-12" method="post" action="#" id="frmdesigns" enctype="multipart/form-data">
																						

							<table class="table table-bordered table-responsive">
					<tbody>
						<div class="form-group">
						<tr>
							<td colspan="2">Receiver Name : <input type="text" name="txtname" id="txtname" class="form-control" required>
							
							
						</tr>
						<tr>
							
							<td>Mobile : <input type="text" name="txtmobile" id="txtmobile" class="form-control" required>
							<td>Address : <input type="text" name="txtaddress" id="txtaddress" class="form-control" required>
							
						</tr>
						<tr>
							<td>City : <input type="text" name="txtcity" id="txtcity" class="form-control" required>
							<td>State : 	<input type="text" name="txtstate" id="txtstate" class="form-control" required>						
						</tr>
						<tr>
							
							<td colspan="2">About : 	<textarea name="txtabout" id="txtabout" class="form-control" required></textarea>						
						</tr>

						<tr>
							<td colspan="2"><button type="submit" id="btncst" name="btncst" class="btn btn-primary save center-block">Save</button>		</td>
						</tr>
						</div>
					</tbody>
						</form>
				</table>				
					
					
				</div>
			</div>
			
		</div>
	</div>
</div>
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="new/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="new/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>



<div><?php include_once("footer.php"); ?></div>
</body>
</html>
