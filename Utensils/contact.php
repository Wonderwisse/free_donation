<?php 
require "Connection.php";

if(Isset($_POST["btnsend"]))
{
	
$name	= 	$_POST['name'];
$message	= 	$_POST['message'];
$mobile	= 	$_POST['mobile'];
$email	= 	$_POST['email'];

		
		
						$result = mysqli_query($con,"insert into contactus set 
													Name		=	'$name',
													Email	=	'$email',	
													Mobile	=	'$mobile',
													Message ='$message'");	
													

						
						if($result)
						{
							echo "
												'<div class='alert alert-success'>
												<p><br></p><p><br></p><p><br></p>
													<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
													<b>Success</b>
												</div>
											";
						}
						else
						{
							echo "
												'<div class='alert alert-warning'>
												<p><br></p><p><br></p><p><br></p>
													<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
													<b>Failed</b>
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

    <title>Utensil Donation</title>

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
                <a class="navbar-brand" href="index.php">Utensil Donation</a>
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



<!--====  End of Navigation Section  ====-->

<!--================================
=            Page Title            =
=================================-->

<p><br></p><br>

<!--====  End of Page Title  ====-->

<section class="section contact-form">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<h4 align="center" style="color:green;">Contact Us</h4>
	</div>
	</div>
	<p><br></p>
<div class="row">

<div class="col-md-4">
<section class="map">
	<!-- Google Map -->
	<div id="map">
	<iframe></iframe>
	</div>
	<div class="address-block">
		<h4>Kitchen Utensil Donation</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>No:64, St Xavier Street, Tambaram,  <br>Chennai, TamilNadu - India.</span></li>
			<li><i class="fa fa-phone"></i><span>[91]9876543211</span></li>
		</ul>
		
	</div>
</section>
</div>
	<div class="col-md-8">
		<form action="#" method="post">
			<div class="col-md-6">
				<input type="text" class="form-control main" name="name" id="name" placeholder="Name" required>
			</div>
			<div class="col-md-6">
				<input type="email" class="form-control main" name="email" id="email" placeholder="Email" required>
			</div>
			<div class="col-md-12">
				<input type="number" class="form-control main" name="mobile" id="mobile" placeholder="mobile" required>
			</div>
			<div class="col-md-12">
				<textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message" required></textarea>
			</div>
			<div class="col-12 text-center">
				<button type="submit" id="btnsend" name="btnsend" class="btn btn-main-md">Send Message</button>
			</div>
		</form>
	</div>
</div>	
</div>
</section>

<!--================================
=            Google Map            =
=================================-->



<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->


<!-- Subfooter -->

  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
 


<div><?php include_once("footer.php"); ?></div>
</body>
</html>