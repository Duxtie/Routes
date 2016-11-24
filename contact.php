<!DOCTYPE html>
<html lang="en">
<head>
<?php require "module/user-static/head.inc.php";?>
</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <?php require "module/user-static/header.inc.php";?>
  
  <div class="offset"></div>
  <div id="map"></div>
  <?php //  AIzaSyDSCZK8oJuxSwoOvMiQSIKlLYctLaTuOZM ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&amp;sensor=false&amp;extension=.js"></script> 
  <script> google.maps.event.addDomListener(window, 'load', init);
	var map;
	function init() {
	    var mapOptions = {
	        center: new google.maps.LatLng(51.211215, 3.226287),
	        zoom: 15,
	        zoomControl: true,
	        zoomControlOptions: {
	            style: google.maps.ZoomControlStyle.DEFAULT,
	        },
	        disableDoubleClickZoom: false,
	        mapTypeControl: true,
	        mapTypeControlOptions: {
	            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
	        },
	        scaleControl: true,
	        scrollwheel: false,
	        streetViewControl: true,
	        draggable : true,
	        overviewMapControl: false,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
			}
	
	    var mapElement = document.getElementById('map');
	    var map = new google.maps.Map(mapElement, mapOptions);
	    var locations = [
	        ['Boudewijn Ostenstraat 2', 51.211215, 3.226287]
	    ];
	    for (i = 0; i < locations.length; i++) {
	        marker = new google.maps.Marker({
	            icon: 'style/images/map-pin.png',
	            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	            map: map
	        });
	    }
	}
  </script>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="section-title">Get in Touch</h2>
          <p>Always available at office residence, every five working days through the week within the hours of 8:00am to 4:00pm. </p>
          <div class="divide10"></div>
          <div class="form-container">
            <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="tel" name="tel" placeholder="Phone">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label class="custom-select">
                      <select name="department" required="required">
                        <option value="">Select Department</option>
                        <option value="Sales">Sales</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Support">Customer Support</option>
                        <option value="Other">Other</option>
                      </select>
                      <span><!-- fake select handler --></span> </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
              <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
              <div class="radio-set">
                <label>Subject:</label>
                <label>
                  <input type="radio" name="subject" value="General">
                  <span><!-- fake radio --></span> General</label>
                <label>
                  <input type="radio" name="subject" value="Hi">
                  <span><!-- fake radio --></span> Say Hi</label>
                <label>
                  <input type="radio" name="subject" value="Other">
                  <span><!-- fake radio --></span> Other</label>
              </div>
              <!--/.radio-set -->
              <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
              <footer class="notification-box"></footer>
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
        </div>
        <!--/column -->
        
        <aside class="col-sm-4">
          <div class="sidebox widget">
            <h3 class="widget-title">Address</h3>
            <p>Box Office Incubator, Discovery Mall, Plot 215 Adetokunbo Ademola Crescent, Wuse II, Abuja, Ademola Adetokunbo Cres, Abuja, Nigeria. </p>
            <address>
            <strong>Routes, Ltd.</strong><br>
            Konoko Cre Street,<br>
            Wuse 2<br>
            <abbr title="Phone">P:</abbr> +234(0) 708 072 0156<br>
            <abbr title="Email">E:</abbr> <a href="mailto:#">support@routesltd.com</a>
            </address>
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!--/column --> 
        
      </div>
      <!--/.row --> 
      
    </div>
    <!--/.container --> 
  </div>
  <!--/.light-wrapper -->
  
  <?php require "module/user-static/footer.inc.php";?> 
  
</main>
<!--/.body-wrapper --> 
<?php require "module/user-static/script.inc.php";?>
</body>
</html>