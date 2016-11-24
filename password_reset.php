<!DOCTYPE html>
<html>
<?php require 'modules/partials/_head.inc.php';?>
<body class="home">

    <!-- Wrapper -->
    <div id="wrapper" class="wide">   

        <?php require 'modules/partials/_header.inc.php'; ?>

<style>
#copyright{
    bottom: 0px;
    position: absolute;
    margin: 0 auto;
    width: 100%
 }
.change_password_form{
	border-color:#000!important;
	border-width:10px;
	background-color:#F6F6F6;
	padding:auto 20px;
	padding:20 auto;
	width:380px;
	height:350px;
	box-shadow: -1px 1px 12px -1px rgba(0,0,0,0.75);
}
.change_password_form form{
	border-color:#000!important;
	border-width:10px;
	padding-left: 37px;
	padding-right:37px;
	padding-top:40px;
	width:100%;
	height:100%;
}

</style>

        <div class="page-content">
			<!-- Section -->
			<section>

				<div class="container">
					<div class="row">
						<div class="col col_12_of_12">

							<div class="change_password_form">
								<form class="" method="POST" action="">
									<h2>Change Password</h2>
									<div class="form-group">
										<label>New Password:</label>
									<input class="" value="" name="New Password" type="password"placeholder="New password"></input>
									</div>
									<div class="form-group">
										<label>New Password:</label>
									<input class="" value="" name="New Password" type="password" placeholder="Retype New password"></input>
									</div>
									<input class="" value="Change" type="submit"></input>
								</form>

							</div>				
							
						</div>					
							
						</div>

					</div>
				</div>
			</section><!-- End Section -->
		</div>


		<?php require 'modules/partials/_copyright.inc.php'; ?>

    </div><!-- End Wrapper -->
    
    <?php require 'modules/partials/_scripts.inc.php'; ?>     

</body>
</html>
