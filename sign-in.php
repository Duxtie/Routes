<!DOCTYPE html>
<html>
<?php require 'static/_head.inc.php';?>
<body>
    <style type="text/css">body{background: #fff;}#copyright{bottom: 0px;position: absolute;margin: 0 auto;width: 100%;}</style>
    <!-- Wrapper -->
    <div id="" class="wide">   

        <?php require 'static/_header.inc.php'; ?>
		
	
        <section>
          <div class="container">
            <div class="row">
              <div class="col col_12_of_12">
                <div class="col col_4_of_12 col-sm-offset-4 mt-75">
                    <form action="" method="POST" class="signin">
                        <div class="col col_12_of_12">
                            <label>Email:</label>
                            <input autocomplete="off" class="" name="c_email" placeholder="Enter email" type="username">
                        </div>
                        <div class="col col_12_of_12">
                            <label>Password:</label>
                            <input autocomplete="off" class="" name="c_pwd" placeholder="Enter password" type="password">
                        </div>
                        <div class="col col_5_of_12 f-right">
                            <input value="Login" class="signin-btn" type="submit">
                        </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </section>

        <?php require 'static/_copyright.inc.php'; ?>

    </div><!-- End Wrapper -->
    
    <?php require 'static/_scripts.inc.php'; ?>   

</body>
</html>
