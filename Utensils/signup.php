<?php 
require "Connection.php";

if(Isset($_POST["btncst"]))
{
	
$txtname	= 	$_POST['txtname'];
$txtAddress	= 	$_POST['txtAddress'];
$txtmobile	= 	$_POST['txtmobile'];
$txtemail	= 	$_POST['txtemail'];
$txtuser	= 	$_POST['txtuser'];
$txtpass	= 	$_POST['txtpass'];
$txtlan		= 	$_POST['txtlan'];
$txtcity	= 	$_POST['txtcity'];
$txtstate	= 	$_POST['txtstate'];
$status="User";
		
		$result = mysqli_query($con,"select username from registration where username='$txtuser'");
		$norow=mysqli_num_rows($result);
			if($norow>0)
			{
				echo "
												'<div class='alert alert-success'>
												<p><br></p><p><br></p><p><br></p>
													<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
													<b>Username Already Exist</b>
												</div>
						";
			}
			else
			{
							mysqli_query($con,"insert into registration set 
													
													Name		=	'$txtname',
													mobile	=	'$txtmobile',
													email	=	'$txtemail',
													Landmark	=	'$txtlan',	
													Address	=	'$txtAddress',
													City	=	'$txtcity',
													State	=	'$txtstate',
													username	=	'$txtuser',
													password	=	'$txtpass',
													role ='$status'");	
													

							mysqli_query($con,"insert into login set
							username	=	'$txtuser',
							password ='$txtpass',
							role ='$status'");

							echo "
												'<div class='alert alert-success'>
												<p><br></p><p><br></p><p><br></p>
													<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
													<b>Signup Success</b>
												</div>
											";

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
                <a class="navbar-brand" href="index.php">Kitchen Utensil Donation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
			   <ul class="nav navbar-nav">
					
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
			       	
					<li>
                        <a href="contact.php">Contact Us</a>
                    </li>	
		 </ul>
		 <ul class="nav navbar-nav navbar-right">				
				<li><a href="signup.php" style='color:#fff;'>Registration</a></li>
				<li><a href="login.php" style='color:#fff;'>Client Login</a></li>
				<li><a href="adminlogin.php" style='color:#fff;'>Admin Login</a></li>
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
    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
               
			   
			   
			   
			   
<section class="signin-page account">
  <div class="container">
    <div class="row">
	<p><br></p>
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">Kitchen Utensil Donation - Signup Portal</h2>
         <form method="post" action="#" id="frmsignup">
				<table class="table table-bordered table-responsive">
					<tbody>
						<div class="form-group">
						<tr style="height="10px;">
							
							
							<td>Name : <input type="text" name="txtname" id="txtname" class="form-control" required></td>
				
							<td>Mobile: <input type="number" name="txtmobile" id="txtmobile" class="form-control" required></td>	
							<td>Email : <input type="email" name="txtemail" id="txtemail" class="form-control" required></td>
							
							
						</tr>	
						
						<tr>
							<td>Address : <input type="text" name="txtAddress" id="txtAddress" class="form-control"></td>							
							<td>City: <input type="text" name="txtcity" id="txtcity" class="form-control" required></td>	
							<td>State : <input type="text" name="txtstate" id="txtstate" class="form-control" required></td>
						</tr>	
							
						<tr>
							<td>Landmark : <input type="text" name="txtlan" id="txtlan" class="form-control" required></td>
							<td>Username : <input type="text" name="txtuser" id="txtuser" class="form-control" required></td>
							<td>Password : <input type="password" id="txtpass" name="txtpass" class="form-control" required></td>
						</tr>							
						<tr>
							<td colspan="3"><button id="btncst" name="btncst" class="btn btn-primary save center-block">Signup</button>		</td>
						</tr>
						</div>
					</tbody>	
				</table>		
</form>
        </div>
      </div>
    </div>
  </div>
</section>



            </div>
        </div>

        <hr>

        <!-- Footer -->
       

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
