<!DOCTYPE html>

<html lang="en">
<head>
<?php require "module/user-static/head.inc.php";?>

</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">

<?php require "module/user-static/header.inc.php";?>
  
  
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/parallax1.jpg);">
    <div class="post-parallax-cover">
      <div class="headline text-center">
        <div class="col-md-4" style="">
          <div class="p-photo"></div>                        
        </div>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax -->

  
  <div class="light-wrapper">
  <div class="divide10"></div>
    <div class="container inner">
    <div class="clearfix"></div>
      <div class="divide10"></div>

      <div class="blog grid-view col2 row">
        <aside class="col-sm-3 sidebar">
          <div class="visible-xs visible-sm sidebox widget">
              
            <div class="air-status">

              <h3>Status</h3>
              <h4 class="active">Active</h4>
              <span class="date">3th Oct 2012 - 25th Dec 2013</span>
            </div> <!-- air-status -->
          </div>
          <div class="sidebox widget">
            <h2 class="widget-title">Dashboard</h2>
            <div class="">
              <ul class="dashboard-list">
                <li><a id="" href="#">Posts</a></li>
                <li><a id="" href="#">Update Profle</a></li>
                <li><a id="" href="#">Add Jobs</a></li>
                <li><a id="" href="#">My Jobs List</a></li>
                <li><a id="" href="#">Find Jobs</a></li>
                <li><a id="" href="#">Applied Jobs</a></li>
                <li><a id="" href="#">Purchase Plan</a></li>
                <li><a id="" href="#">Customer Service</a></li>
                <li><a id="" href="#">Logout</a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget -->          
        </aside>
        <!-- /column .sidebar -->
        <?php /*function user-nav( );*/
        require "module/profile-pages/update-profile.php";
        ?>
        
        <div class="visible-md visible-lg responsive-invisibility">
          <aside class="col-sm-3 sidebar">
            <div class="box">
              <div class="sidebox widget">
              
                <div class="air-status">

                  <h3>Status</h3>
                  <h4 class="inactive">InActive</h4>
                  <span class="date">3th Oct 2012 - 25th Dec 2013</span>
                </div> <!-- air-status -->
              </div>
              <hr/>
              <div class="sidebox widget">
                <h2 class="widget-title">Job Search</h2>
                <form class="searchform" method="get">
                  <input name="department" required="required" placeholder="Job Title" id="s1" type="text">
                  <label class="custom-select"></label>
                 <select name="industry" value="" type="text" id="">
                              <option> Choose Industry </option>
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
                  <button type="submit" class="btn" style="position: relative;">Find</button>
                </form>
              </div>
              <!-- /.widget --> 
            </div><!--box-->         
          </aside>
          <!-- /column .sidebar -->
        </div><!--hidden-sm hidden-md--> 
      </div> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  <!-- <div class="clearfix"></div> -->
  <div class="divide10"></div>

  <div class="stick-to-bottom">
      <?php require "module/user-static/sub-footer.inc.php";?>
  </div>

  <div class="clearfix"></div>
</main>
<!--/.body-wrapper --> 
  

<?php require "module/user-static/script.inc.php";?>

</body>
</html>