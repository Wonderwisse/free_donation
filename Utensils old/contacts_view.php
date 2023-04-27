<?php
require "Connection.php";
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}

	$sql1 ="select * from contactus";
$result1 = mysqli_query($con,$sql1);

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
	<br><br>
<section class="signin-page account">
	<div class="container-fluid">
    <div class="row">
	 <h2 class="text-center"></h2>
			
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><h3 align="center">Kitchen Utensil - Contact Us Details</h3></div>
					<div class="panel-body" style="background-color:#fff;"> 
						<form method="post" action="#" id="frmenquiry">	
					
									
			<div class="col-md-12">		
			<table class="table table-striped table-hover table-bordered" align="center">
				<thead class="thead-dark" align="center">
					<tr align="center">
						<th align="center">Id</th>
						<th align="center">Client Name</th>
						<th align="center">Email</th>
						<th align="center">Mobile</th>
						<th align="center">Message</th>
						<th align="center">Posting Date</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php 
						
						while ($row=mysqli_fetch_array($result1))
						{
							?>
							<tr>
								<td><?php echo $row[0]; ?></td>
								
								<td><?php echo $row[1]; ?></td>
								<td><?php echo $row[2]; ?></td>
								<td><?php echo $row[3]; ?></td>
								<td><?php echo $row[4]; ?></td>
								<td><?php echo $row[5]; ?></td>
							</tr>							
					<?php 
						}
					?>

				</tbody>
			</table>
		</div>
<hr>		
		
	</div>	
</div>	
</div>		
											
			<hr>															
					
						
			</div>																				
							
	</div>
</section>

 <div><?php include_once("footer.php"); ?></div>
</body>

</html>	