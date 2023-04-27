<?php
session_start();
require_once "Connection.php";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
if(isset($_POST['btncst']))

{         
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="Donate/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	$txtname	 	= 	$_POST['txtname'];
	$txtaddress		= 	$_POST['txtaddress'];	
	$txtprodname		= 	$_POST['txtprodname'];	
	$txtdetails			= 	$_POST['txtdetails'];	
	$status			=	"Pending";	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		mysqli_query($con,"insert into donation set 
						username		=	'$txtname',
						address	=	'$txtaddress',
						productname	=	'$txtprodname',						
						productDetails		=	'$txtdetails',						
						prodimage		=	'$file',
						status		=	'$status'")or die('Query Not Working 2 : '.mysqli_error());		
	}
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
                <a class="navbar-brand" href="MasterUser.php">Kitchen Utensil Donation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
			   <ul class="nav navbar-nav">
					<li>
                        <a href="donate.php">Donate</a>
                    </li>
                    <li>
                        <a href="needers_view.php">Needers</a>
                    </li>                   					
					
					<li>
                        <a href="feedbacks.php">Feedbacks</a>
                    </li>
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

		
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background-color:#000;color:yellow;"><h3>Kitchen Utensil Donation</h3></div>
					<div class="panel-body"> 
					
			
						
		<table class="table table-bordered">
							<form class="col-md-12" method="post" action="#" id="frmdesigns" enctype="multipart/form-data">
																						

							<table class="table table-bordered table-responsive">
					<tbody>
						<div class="form-group">
						<tr style="height="10px;">
							<td>Name : <input type="text" name="txtname" id="txtname" class="form-control" value="<?php echo $_SESSION["uname"]; ?>" readonly>
				
							</td>
							
							<td>Product Name : <input type="text" name="txtprodname" id="txtprodname" class="form-control" required>
				
							</td>
						</tr>	
						<tr>
							
							<td colspan="2">Address : <textarea name="txtaddress" id="txtaddress" class="form-control" required></textarea>
							
						</tr>
						<tr>
							<td> Product Photo : 	<input type="file" name="file" /></td>
							<td>Product Details : 	<textarea name="txtdetails" id="txtdetails" class="form-control" required></textarea>						
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
