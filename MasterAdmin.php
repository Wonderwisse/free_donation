<?php
session_start();
require_once "Connection.php";
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
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
	
    <header id="myCarousel" class="carousel slide" style="top:50px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/utensils1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Kitchen Utensil Donation</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/utensils2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>24 x 7 Support</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/utensils3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Donate To Needy One</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
<br><br><br>
    <!-- Page Content -->
   <div class="container-fluid">
	
		<div class="row">

		
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background-color:#000;color:yellow;"><h3>Utensil Donation Details</h3></div>
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
								
				
								
								
							</tr>							
					<?php 
						}
					?>

				</tbody>
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
