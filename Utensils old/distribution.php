<?php
session_start();
require_once "Connection.php";
$txtdonid="";
$txtprodname="";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
If(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$rec=mysqli_query($con,"select * from donation where donid=$id");
	$record=mysqli_fetch_array($rec);
	$txtdonid = $record['donid'];
	$txtprodname = $record['productname'];
	$id=$record['donid'];
}
if(isset($_POST['btncst']))

{         
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	$txtreceiver	 	= 	$_POST['txtreceiver'];
	$txtmobile		= 	$_POST['txtmobile'];	
	$txtarea		= 	$_POST['txtarea'];	
	$txtaddress			= 	$_POST['txtaddress'];	
	$txtdonid			= 	$_POST['txtdonid'];	
	$txtprodname			= 	$_POST['txtprodname'];	
	$status			=	"Distributed";	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		mysqli_query($con,"insert into distribution set 
						username		=	'$txtreceiver',
						mobile	=	'$txtmobile',
						areaname	=	'$txtarea',						
						address		=	'$txtaddress',						
						donation_id		=	'$txtdonid',						
						prodname		=	'$txtprodname',
						issue_image	=	'$file'")or die('Query Not Working 2 : '.mysqli_error());		
		mysqli_query($con,"update donation set status='$status' where donid='$txtdonid'");
	}
}
$status = "Pending";
$results = mysqli_query($con,"select * from donation where status='$status'");
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

		
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background-color:#000;color:yellow;"><h3>Utensil Distribution Details</h3></div>
					<div class="panel-body"> 
					<table class="table table-striped table-hover table-bordered">
				<thead class="thead-dark">
					<tr style="Background-color:#000;color:#fff;">
						<th>Donate Id</th>
						<th>User Name</th>
						<th>Product Name</th>
						
						<th>Product Details</th>
						<th>Product Image</th>
						<th>Status</th>
						<th>Donated Date</th>
						<th>Show</th>
						
				
						
					</tr>
				</thead>
				<tbody>
					<?php 
						
						while ($row=mysqli_fetch_array($results))
						{
							?>
							<tr>
								<td><?php echo $row['donid']; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['productname']; ?></td>
								<td><?php echo $row['productDetails']; ?></td>
								<td><?php echo $row['prodimage']; ?></td>
								<td><?php echo $row['status']; ?></td>
								<td><?php echo $row['donated_at']; ?></td>
								<td><a style="text-decoration:none;padding:2px 5px;color:#0099cc;border-radius:3px;backgroud:#800000;" href="distribution.php?edit=<?php echo $row['donid']; ?>">Show</a></td>
				
								
								
							</tr>							
					<?php 
						}
					?>

				</tbody>
			</table>
<hr>			
						
		<table class="table table-bordered">
							<form class="col-md-12" method="post" action="#" id="frmdesigns" enctype="multipart/form-data">
																						

							<table class="table table-bordered table-responsive">
					<tbody>
						<div class="form-group">
						<tr style="height="10px;">
							<td>Donation Id : <input type="text" name="txtdonid" id="txtdonid" class="form-control" value="<?php echo $txtdonid; ?>" >
				
							</td>
							
							<td>Product Name : <input type="text" name="txtprodname" id="txtprodname" class="form-control" value="<?php echo $txtprodname; ?>">
				
							</td>
						</tr>	
						<tr>
							<td>Receiver Name : <input type="text" name="txtreceiver" id="txtreceiver" class="form-control">
							<td>Mobile : <input type="text" name="txtmobile" id="txtmobile" class="form-control">
							
						</tr>
						<tr>
							<td>Area Name : <input type="text" name="txtarea" id="txtarea" class="form-control">
							<td>Address : <input type="text" name="txtaddress" id="txtaddress" class="form-control">
							
						</tr>
						<tr>
							<td colspan="2">Distribution Image : 	<input type="file" name="file" /></td>
													
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
