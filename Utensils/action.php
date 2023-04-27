<?php
session_start();
include "Connection.php";

if(isset($_POST["getProduct"]))
{
	
	$product_query = "select * from distribution";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0)
	{
		while($row = mysqli_fetch_array($run_query))
		{
			$prod_id=$row["disid"];
			$receiver=$row["username"];
			$mobile=$row["mobile"];
			$prod_name=$row["prodname"];
			
			$prod_image=$row["issue_image"];
			
			echo "	
				<div class='col-md-3'>
								<div class='panel panel-info'>
									<div class='panel-heading'><h4><b>Product Name : </b> $prod_name</h4></div>
									<div class='panel-body'>
										<img src='uploads/$prod_image' style='width:160px; height:150px;float:left;'/>
										
										
									</div>
									<div class='panel-heading' style='background-color:#000;color:#fff;'>	
										
										<h4><b>Receiver : $receiver	</b></h4>									
										<b><h4>Mobile : $mobile</h4></b>
										
										
									</div>
								</div>
				</div>
			";
		}
	}
}
?>