<!DOCTYPE html>
<html>
<?php require 'modules/partials/_head.inc.php';?>
<body class="home">

    <!-- Wrapper -->
    <div id="wrapper" class="wide">   

        <?php require 'modules/partials/_header.inc.php'; ?>

        <div class="page-content">
			<!-- Section -->
			<section>

				<div class="container">
					<div class="row">
						<div class="cover" style="border-radius:4px; background-color:#10537a; height:200px;">
							<!-- Profile Photo -->
							<div class="col col_3_of_12" style="">
								<div class="p-photo">
									<h4><a href="">Logo</a></h4>
								</div>												
							</div><!-- End Profile -->
							<!-- Profile cover -->
							<div class="col col_9_of_12">
								
							</div><!-- End Profile cover -->
						</div>
					</div>
					<hr/>
					<div class="row">


						<?php require "modules/user/partials/_user-sidebar.inc.php"; ?>

						<!-- Main content -->
						<div class="col col_9_of_12">


							<!-- Section -->
							<section class="job-form">
								<div class="">
									<div class="row">
										<div class="col col_8_of_12">
											<div class="job-form">
												<form class="" method="POST" action="">
													<h2>Post Job</h2>
													<div class="form-group">
														<label>Job Title:</label>
														<input class="" value="" name="" type="text" placeholder=""/>
													</div>
													<div class="form-group">
														<div class="row">
														<div class="col col_6_of_12">
															<label>Choose an Industry:</label>
															<input class="" value="" name="" type="text" placeholder=""/>
														</div>
														<div class="col col_6_of_12">
															<label>Choose a Category:</label>
															<input class="" value="" name="" type="text" placeholder=""/>
														</div>
														</div>
													</div>
													<div class="form-group">
														<label>When would you like your service delivered?</label>
														<input class="" value="" name="" type="text" placeholder=""/>
													</div>
													<div class="form-group">
														<label>What is your budget for this service? (Optional) </label>
														<input class="" value="" name="" type="text" placeholder="" />
													</div>
													<div class="form-group">
														<label>Job Discription:</label>
														<textarea class="" name="" type="" placeholder="" rows="5"></textarea>
													</div>
													<input class="" value="Post" type="submit"/>
												</form>
											</div><!-- ./job-form -->		
										</div><!-- ./col -->					
									</div><!-- ./row -->
								</div><!-- ./container -->
							</section><!-- ./section -->

						</div><!-- End Main content -->
						
						
					</div>
				</div>
			</section><!-- End Section -->
		</div>


		<?php require 'modules/partials/_copyright.inc.php'; ?>

    </div><!-- End Wrapper -->
    
    <?php require 'modules/partials/_scripts.inc.php'; ?>   

</body>
</html>
