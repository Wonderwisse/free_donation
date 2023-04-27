<?php
session_start();
if(!isset($_SESSION["uname"]))
{
	header("location:index.php");
}

require "Connection.php";

if(isset($_POST['btncst']))
{
$txtclientname	= 	$_POST['txtclientname'];

$txtmobile	= 	$_POST['txtmobile'];


$txtfeedback	= 	$_POST['txtfeedback'];


		$run_query = "insert into feedbacks set 												
						username		=	'$txtclientname',						
						mobile		=	'$txtmobile',
						feedbacks	=	'$txtfeedback'";
	if(mysqli_query($con,$run_query))
			{
							echo "
					alert('<div class='alert alert-success'>
					<p><br></p><p><br></p><p><br></p>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Feedbacks Sent Successfully</b>
					</div>')
				";
			}
			else
			{
				echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' arial-label='close'>&times;</a>
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

	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="signup_msg">
		
		</div>
	</div>
	<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Feedbacks</div>
					<div class="panel-body" style="background-color:#EEE8AA;"> 
						<form method="post">
						<div class="row">
							
							<div class="col-md-6">
								<label for="Name">User Name</label>
								<input type="text" id="txtclientname" name="txtclientname" class="form-control" value="<?php echo $_SESSION["uname"]; ?>" readonly>
							</div>
							<div class="col-md-6">
								<label for="Name">Mobile</label>
								<input type="number" class="form-control" id="txtmobile" name="txtmobile">
							</div>	
						</div>
						<div class="row">
						
						

								
							<div class="col-md-12">
								<label for="Name">Feedbacks</label>
								<textarea class="form-control" id="txtfeedback" name="txtfeedback"></textarea>
							</div>								
						</div>					
						
					
						<div class="row">


							
						</div>							
						<div class="row">

						
						</div>												
						<p></br></p>
						<div class="row">
						<div class="col-md-5"></div>								
							<div class="col-md-7">								
								<button id="btncst"  name="btncst" class="btn btn-success btn-md">Submit</button>
							</div>
						</div>																		
						</div>
					</form>
					
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<div><?php include_once("footer.php"); ?></div>
</body>
</html>		