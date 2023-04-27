<?php 
session_start();
	if(!$_POST)
	{
		$_SESSION['uid'] = "";
		$_SESSION['uname'] = "";
		$_SESSION['role'] = "";
	}	
require "Connection.php";

if(isset($_POST['btnlogin']))
{
	$txtusername= $_POST['txtusername'];
	$txtpassword= $_POST['txtpassword'];
			$result = mysqli_query($con,"select * from login where username='$txtusername' and  password='$txtpassword'")
				or die('Invalid User : '.mysqli_error());
			$norow=mysqli_num_rows($result);
			$hlocation="";
			if($norow>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['uname']= $row[1];
                $_SESSION['role']= $row[3];
				$_SESSION['uid']= $row[0];
				if($row[3]=='Admin')					
				{				
					header("location:MasterAdmin.php");
				}
				
				else
				{
					header("location:index.php");
				}
			}
		
			mysqli_close($con);
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
                <div class="fill" style="background-image:url('utensils1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Kitchen Utensil Donation</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('utensils2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>24 x 7 Support</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('utensils3.jpg');"></div>
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
	<br><br>
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
         
          <h2 class="text-center">Welcome Back Admin</h2>
          <form action="adminlogin.php" method="post" >
            <div class="form-group">
              <input type="text" class="form-control" name="txtusername" id="txtusername"  placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="txtpassword" id="txtpassword" class="form-control" placeholder="Password">
            </div>
            <div class="text-center">
              <button id="btnlogin" name="btnlogin" class="btn btn-main text-center" >Login</button>
			  
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
  
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