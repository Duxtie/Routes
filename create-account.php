<?php 
    // Start a session
    require_once ("inc/db_connect.php");
    require_once ("inc/function.php");
    require_once ("inc/process_login.php");
    // require_once ("inc/logout.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require "module/user-static/head.inc.php";?>

	</head>
	<body>
	
	<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
		<main class="body-wrapper">

		<?php require "module/user-static/header.inc.php";?>

			 <div class="dark-wrapper">
			    <div class="container inner">
				    <!-- <div class="col-md-5">
					    <h3 class="section-title text-center">Signin</h3>
					    <div class="divide10"></div>
					    <div class="col-md-12" style="position: center;">
					   		<div class="login-form">
					          <form class="searchform" method="get">
					          	<h3 class="widget-title">Email</h3>
					            <input name="email" value="your email" type="email" id="email">
					            <h3 class="widget-title">Password</h3>
					            <input name="pwd" value="your password" type="password" id="password">
					            <button type="submit" class="btn btn-default">Send</button>
					          </form>
					        </div>
				        </div>
				    </div> -->

				    <div class="col-sm-8 col-sm-offset-2">
					    <h3 class="section-title text-center">Create an Account</h3>
					    <div class="divide10"></div>
					    <div class="col-md-12">
					    	<div class="account-form">
					          <form class="searchform" method="post">
					            <h3 class="widget-title">Company's Name</h3>
					            <input name="companyname" value="" type="text" id="" placeholder="Company's Name" autocomplete="off">
					            <h3 class="widget-title">Choose Industry</h3>
					                <select name="industry" value="" type="text" id="">
						            	<option>-- industry --</option>
						            	<option>Advertising/Marketing</option>
						            	<option>Agriculture/Pultry/Fishing</option>
						            	<option>Banking/Financial Services</option>
						            	<option>Construction/Real Estate</option>
						            	<option>Consulting</option>
						            	<option>Creation/Art/Design</option>
						            	<option>Ecommerce/Internet</option>
						            	<option>Education</option>
						            	<option>Engineering</option>
						            	<option>FCMG</option>
						            	<option>Food Service</option>
						            	<option>Government/Defence</option>
						            	<option>Healthcare</option>
						            	<option>Hospitality/Leisure</option>
						            	<option>ICT/Telecommunication</option>
						            	<option>Insurance</option>
						            	<option>Legal</option>
						            	<option>Logistics/Transportation</option>
						            	<option>Manufacturing/Production</option>
						            	<option>Media</option>
						            	<option>NGO</option>
						            	<option>Oil & Gas/Mining</option>
						            	<option>Power/Energy</option>
						            	<option>Retail/Wholesale</option>
						            	<option>Trade/Service</option>
						            	<option>Travels/Tours</option>
						            	<option>All Categories</option>
						            	
						            </select>
						            <div class="form-group">
							            <div class="row">
							            	<div class="col-md-7">
									            <h3 class="widget-title">Email</h3>
								            	<input name="email" value="" type="email" id="email" placeholder="Email" autocomplete="off">
								            </div>
								            <div class="col-md-5">
									            <h3 class="widget-title">Phone No.</h3>
									            <input name="phone" value="" type="text" id="" placeholder="Phone No." autocomplete="off">
								            </div>
							            </div>
						            </div>
						            <div class="form-group">
							            <div class="row">
								          	<div class="col-md-6">
										        <h3 class="widget-title">Password</h3>
										        <input name="pwd" value="" type="password" id="password" placeholder="Password" autocomplete="off">
								        	</div>
								        	<div class="col-md-6">
										        <h3 class="widget-title">Retype Password</h3>
										        <input name="pwd" value="" type="password" id="password" placeholder="Retype-Password" autocomplete="off">
								        	</div>
								        </div>
						        	</div>
					            <h3 class="widget-title">Office Address</h3>
					            <textarea name="contact address" value="" type="text" id=""></textarea>
					            <button type="submit" class="btn">Submit</button>
					          </form>
				          	</div>
				        </div>
				    </div>

			    </div>
			 </div>
			 <?php require "module/user-static/sub-footer.inc.php";?>
		</main>
		<?php require "module/user-static/script.inc.php";?>
	</body>
</html>