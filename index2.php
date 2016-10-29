<!DOCTYPE html>
<html>
<?php require 'static/_head.inc.php';?>
<body class="home">
<style>

/****************
  Slide search
*****************/
#search-filter {
  margin-bottom: 40px;
  padding-top: 10px;
  position: relative;
}
#search-filter h3 {
  display: inline-block;
  margin: 0 10px 0 0;
}
#search-filter h3 i {
  color: #e97a19;
  font-size: 12px;
  margin-right: 5px;
  position: relative;
  top: -2px;
}
#search-filter .search-count {
  font-weight: bold;
}
#search-filter .sorting {
  position: absolute;
  right: 0;
  top: 0px;
}
#search-filter .sorting span, #search-filter .sorting .form-group {
  display: inline-block;
}
#search-filter .sorting span {
  margin-right: 10px;
}
#search-filter .sorting .form-group {
  min-width: 200px;
}



  .horizontal-search .advanced-search-toggle {
    position: relative !important;
  }
  .horizontal-search .search-box-wrapper input[type="text"], .horizontal-search .search-box-wrapper input[type="email"], .horizontal-search .search-box-wrapper input[type="search"], .horizontal-search .search-box-wrapper input[type="password"], .horizontal-search .search-box-wrapper input[type="number"], .horizontal-search .search-box-wrapper textarea.form-control, .horizontal-search .search-box-wrapper .selectpicker {
    background-color: #fff !important;
  }
  .horizontal-search .submit-features li {
    width: 100%;
  }



.input-group .search {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  position: relative;
  width: 40px;
  z-index: 2;
}


.search-box-wrapper {
  position: absolute;
  width: 100%;
  top: 0px;
}
.search-box-wrapper .search-box-inner h2 {
  margin-bottom: 20px;
}
.input-group .search {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  position: relative;
  width: 40px;
  z-index: 2;
}

@media (max-width: 767px) {
#search-filter {
    margin-bottom: 10px;
    padding: 0;
  }
  #search-filter .sorting {
    position: relative;
    margin-top: 10px;
  }
  #search-filter .sorting .form-group {
    width: 100%;
  }

  .search-box-wrapper {
    background-color: #233B6B;
    padding: 20px 0;
    position: relative;
    top: 0 !important;
  }
  .search-box-wrapper h2 {
    color: #fff;
  }
  .search-box-wrapper input[type="text"], .search-box-wrapper input[type="email"], .search-box-wrapper input[type="search"], .search-box-wrapper input[type="password"], .search-box-wrapper input[type="number"], .search-box-wrapper textarea.form-control {
    background-color: rgba(0, 0, 0, 0.4) !important;
  }
  .search-box-wrapper .background-image {
    left: inherit;
    margin-left: inherit;
  }
  .search-box-wrapper .selectpicker, .search-box-wrapper .price-range {
    background-color: rgba(0, 0, 0, 0.4) !important;
  }
  .search-box-wrapper .search-box {
    margin-top: 0;
    padding-right: 0;
    position: relative;
  }
  .search-box-wrapper .search-box .nav-pills {
    margin-bottom: 20px;
  }
  .search-box-wrapper .search-box .nav-pills li.active a {
    background-color: #e97a19;
    color: #fff;
    position: relative;
  }
  .search-box-wrapper .search-box .nav-pills li.active a:after {
    filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
  }
  .search-box-wrapper .search-box .nav-pills li a {
    filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
    background-color: transparent;
    color: #fff;
  }
  .search-box-wrapper .search-box .nav-pills li a:after {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -moz-transition: 0.4s;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    width: 0;
    border-style: solid;
    border-width: 5px 3.5px 0 3.5px;
    border-color: #e97a19 transparent transparent transparent;
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    bottom: -5px;
  }

  .section-title .link-arrow {
    position: relative;
    top: -15px;
  }
}
</style>
    <!-- Wrapper -->
    <div id="wrapper" class="wide">   

        <?php require 'static/_header.inc.php'; ?>
		
		<?php require 'static/widget/_wide_slider.inc.php'; ?>
	

           
			<!-- Search Box -->
			<div class="search-box-wrapper">
				<div class="search-box-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-md-offset-8 col-sm-4 col-sm-offset-8">
								<div class="search-box map">
									<div class="form-border">
										<form role="form" id="form-map" class="form-map form-search" action="search">
											<h2>Search</h2>
											<div class="form-group">
												<input type="text" name="company_name" placeholder="Company" autocomplete="false"/>
											</div><!-- /.form-group -->
											<div class="form-group">
												<input type="text" class="form-control" id="search-box-property-id"  autocomplete="false" placeholder="Location">
											</div><!-- /.form-group -->
											<div class="form-group">
												<select name="industry">
													<option value="">-- Select industry --</option>
													<option value="">Industry One</option>
													<option value="">Industry Two</option>
													</select>
											</div><!-- /.form-group -->
											
											<div class="form-group">
												<button type="submit" class="btn btn-default">Search Now</button>
											</div><!-- /.form-group -->
										</form><!-- /#form-map -->
									</div>
								</div><!-- /.search-box.map -->
							</div><!-- /.col-md-3 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.search-box-inner -->
			</div>
			<!-- end Search Box -->
			
		<div class="page-content">
			<!-- Section -->
			<section>

				<div class="container">
					<div class="row">
						<!-- Main content -->
						<div class="col col_9_of_12">
							<!-- Panel title -->
								<div class="panel_title">
									<div>
										<h4><a href="blog.html">Our Companies & Organizations</a></h4>
									</div>
								</div><!-- End Panel title -->
								<!-- Layout post 1 -->
								<div class="row">
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/2.jpg" alt="Post"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/1.jpg" alt="Post"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/2.jpg" alt="Post"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/1.jpg" alt="Post"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/2.jpg" alt="Post"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
									<div class="col col_6_of_12">
										<!-- Layout post 1 -->
										<div class="layout_post_1">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x300/1.jpg" alt="Post"></a>
												</div>                                            
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales</a></h4>
												<p>In et consequat nisi, at arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. Pellentesque venenatis velit ut feugia [...]</p>
											</div>
										</div><!-- End Layout post 1 -->
									</div>
								</div><!-- End Layout post 1 -->
								<!-- Panel title -->
								<div class="panel_title">
									<div>
										<h4><a href="blog.html">Top News</a></h4>
									</div>
								</div><!-- End Panel title -->
								<!-- Top News -->
								<div class="row">
									<div class="col col_4_of_12">
										<!-- Top New -->
										<div class="top_review">
											<div class="item_content">
												<a class="hover_effect" href="post_single.html">
													<div class="result" jQuery>3.0</div>
													<img src="demo/500x500/2.jpg" alt="Post" class="visible animated">
												</a>
												<h4><a href="post_single.html"><span class="format" jQuery>Video</span>Curabitur et egestas ante ellentesque hendrerit</a></h4>
											</div>
											<div class="full_meta clearfix">
												<span class="meta_rating">
													<span jQuery><strong>3.00</strong></span>
												</span>
											</div>
											<div class="transition_line"></div>
										</div><!-- End Top New -->
									</div>
									<div class="col col_4_of_12">
										<!-- Top review -->
										<div class="top_review">
											<div class="item_content">
												<a class="hover_effect" href="post_single.html">
													<div class="result" jQuery>3.0</div>
													<img src="demo/500x500/3.jpg" alt="Post" class="visible animated">
												</a>
												<h4><a href="post_single.html"><span class="format" jQuery>Travel</span>Curabitur et egestas ante ellentesque hendrerit</a></h4>
											</div>
											<div class="full_meta clearfix">
												<span class="meta_rating">
													<span jQuery><strong>3.00</strong></span>
												</span>
											</div>
											<div class="transition_line"></div>
										</div><!-- End Top review -->
									</div>
									<div class="col col_4_of_12">
										<!-- Top review -->
										<div class="top_review">
											<div class="item_content">
												<a class="hover_effect" href="post_single.html">
													<div class="result" jQuery>3.0</div>
													<img src="demo/500x500/10.jpg" alt="Post" class="visible animated">
												</a>
												<h4><a href="post_single.html"><span class="format" jQuery>Sport</span>Curabitur et egestas ante ellentesque hendrerit</a></h4>
											</div>
											<div class="full_meta clearfix">
												<span class="meta_rating">
													<span jQuery><strong>3.00</strong></span>
												</span>
											</div>
											<div class="transition_line"></div>
										</div><!-- End Top review -->
									</div>
								</div><!-- End Top reviews -->
								<!-- Panel title -->
								<div class="panel_title">
									<div>
										<h4><a href="blog.html">Music</a></h4>
									</div>
								</div><!-- End Panel title -->
							   <div class="multipack clearfix">
									<!-- Layout post 1 -->
									<div class="layout_post_1">
										<div class="item_thumb">
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x300/7.jpg" alt="Post" class="visible animated"></a>
											</div>								
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Etiam convallis feugiat risus, vitae molestie tellus lacinia non in consectetur magna</a></h4>
											<p>Etiam convallis feugiat risus, vitae molestie tellus lacinia non. Sed et condimentum urna, in consectetur magna. Curabitur porta lobortis nulla. Aliquam volutpat luctus pharetra. Nam suscipit venenatis lectus, sit amet feugiat enim iaculis ac. Curabitur et egestas ante. Pellentesque hendrerit imperdiet faucibus [...]</p>
										</div>
									</div><!-- End Layout post 1 -->
									<!-- Post lists -->
									<div class="list_posts">
										<!-- Post -->
										<div class="post clearfix">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x500/14.jpg" alt="Post" class="visible animated"></a>
												</div>
											</div>
											<div class="item_content">
												
												<h4><a href="post_single.html">In eget leo lacinia, maximus leo non interdum justo eget iaculis ultrices</a></h4>
												<div class="item_meta clearfix">
													<span class="meta_date">October 3, 2014</span>
													<span class="meta_likes"><a href="#">29</a></span>
												</div>
											</div>
										</div><!-- End Post -->
										<!-- Post -->
										<div class="post clearfix">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x500/7.jpg" alt="Post" class="visible animated"></a>
												</div>
											</div>
											<div class="item_content">
												
												<h4><a href="post_single.html">In eget leo lacinia, maximus leo non interdum magna interdum justo non est</a></h4>
												<div class="item_meta clearfix">
													<span class="meta_date">October 3, 2014</span>
													<span class="meta_likes"><a href="#">29</a></span>
												</div>
											</div>
										</div><!-- End Post -->
										<!-- Post -->
										<div class="post clearfix">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x500/1.jpg" alt="Post" class="visible animated"></a>
												</div>
											</div>
											<div class="item_content">
												
												<h4><a href="post_single.html">In eget leo lacinia, maximus leo non interdum magna interdum justo non est iaculis</a></h4>
												<div class="item_meta clearfix">
													<span class="meta_date">October 3, 2014</span>
													<span class="meta_likes"><a href="#">29</a></span>
												</div>
											</div>
										</div><!-- End Post -->
										<!-- Post -->
										<div class="post clearfix">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x500/2.jpg" alt="Post" class="visible animated"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">In eget leo lacinia, maximus leo non interdum magna interdum</a></h4>
												<div class="item_meta clearfix">
													<span class="meta_date">October 3, 2014</span>
													<span class="meta_likes"><a href="#">29</a></span>
												</div>
											</div>
										</div><!-- End Post -->
										<!-- Post -->
										<div class="post clearfix">
											<div class="item_thumb">
												<div class="thumb_hover">
													<a href="post_single.html"><img src="demo/500x500/9.jpg" alt="Post" class="visible animated"></a>
												</div>
											</div>
											<div class="item_content">
												<h4><a href="post_single.html">In eget leo lacinia, maximus leo non interdum magna interdum justo non</a></h4>
												<div class="item_meta clearfix">
													<span class="meta_date">October 3, 2014</span>
													<span class="meta_likes"><a href="#">29</a></span>
												</div>
											</div>
										</div><!-- End Post -->
									</div><!-- End Post lists -->
								</div>
								
								<!-- Panel title -->
								<div class="panel_title">
									<div>
										<h4><a href="blog.html">Music</a></h4>
									</div>
								</div><!-- End Panel title -->
								<!-- Layout post 2 -->
								<div class="row">
								<div class="col-md-12">
									<!-- Layout post 1 -->
									<div class="layout_post_2 clearfix">
										<div class="item_thumb">
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x300/3.jpg" alt="Post" class="visible animated"></a>
											</div>                                        
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales hac habitasse platea dictumst</a></h4>
											<p>In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque.  In et consequat nisi, at condimentum arcu [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Layout post 1 -->
								</div>
								<div class="col-md-12">
									<!-- Layout post 1 -->
									<div class="layout_post_2 clearfix">
										<div class="item_thumb">
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x300/6.jpg" alt="Post" class="visible animated"></a>
											</div>                                        
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales hac habitasse platea dictumst</a></h4>
											<p>In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque.  In et consequat nisi, at condimentum arcu [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Layout post 1 -->
								</div>
								<div class="col-md-12">
									<!-- Layout post 1 -->
									<div class="layout_post_2 clearfix">
										<div class="item_thumb">
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x300/5.jpg" alt="Post" class="visible animated"></a>
											</div>
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Maecenas tempor volutpat commodo uspendisse potenti ed congue sodales hac habitasse platea dictumst</a></h4>
											<p>In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque. In et consequat nisi, at condimentum arcu. In hac habitasse platea dictumst. Fusce vestibulum tincidunt magna vitae scelerisque.  In et consequat nisi, at condimentum arcu [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Layout post 1 -->
								</div>
							</div><!-- End Layout post 2 -->
							</div><!-- End Main content -->
							<!-- Sidebar -->
							<div class="col col_3_of_12">
								<!-- Widget Search widget -->
								<div class="widget">
									<div class="widget_title"><h3>Search widget</h3></div>
									<div class="tb_widget_search">
										<form>
											<input type="text">
											<input type="submit" value="Search">
										</form>
									</div>
								</div><!-- End Widget Search widget -->
								<!-- Widget Social widget -->
								<div class="widget">
									<div class="widget_title"><h3>Socialize</h3></div>
									<div class="tb_widget_socialize clearfix">
										<a href="http://www.facebook.com/" target="_blank" class="icon facebook">
											<div class="symbol"><i class="fa fa-facebook"></i></div>
										</a>
										<a href="https://plus.google.com" target="_blank"  class="icon google">
											<div class="symbol"><i class="fa fa-google-plus"></i></div>
										</a>
										<a href="http://www.twitter.com/" target="_blank"  class="icon twitter">
											<div class="symbol"><i class="fa fa-twitter"></i></div>
										</a>
										<a href="http://www.linkedin.com/" target="_blank"  class="icon linkedin">
											<div class="symbol"><i class="fa fa-linkedin"></i></div>
										</a>
									</div>
								</div><!-- End Widget Social widget -->
								<!-- Widget top rated -->
								<div class="widget">
								<div class="widget_title"><h3>Top rated</h3></div>
								<div class="tb_widget_top_rated clearfix">
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb clearfix">
											<a href="#"><img src="demo/500x500/9.jpg" alt="Post" class="visible animated"></a>
										</div>
										<div class="item_content">
											<div class="item_meta clearfix">
												<span class="meta_rating" title="Rated 4.50 out of 5">
													<span jQuery>
														<strong>4.50</strong>
													</span>
												</span>
											</div>
											<h4><a href="#">Nam at maximus nisl sed tempus est</a></h4>
										</div>
										<div class="order">1</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb clearfix">
											<a href="#"><img src="demo/500x500/7.jpg" alt="Post" class="visible animated"></a>
										</div>
										<div class="item_content">
											<div class="item_meta clearfix">
												<span class="meta_rating" title="Rated 3.00 out of 5">
													<span jQuery>
														<strong>3.00</strong>
													</span>
												</span>
											</div>
											<h4><a href="#">Nam at maximus nisl sed tempus est</a></h4>
										</div>
										<div class="order">2</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb clearfix">
											<a href="#"><img src="demo/500x500/5.jpg" alt="Post" class="visible animated"></a>
										</div>
										<div class="item_content">
											<div class="item_meta clearfix">
												<span class="meta_rating" title="Rated 1.50 out of 5">
													<span jQuery>
														<strong>1.50</strong>
													</span>
												</span>
											</div>
											<h4><a href="#">Nam at maximus nisl sed tempus est</a></h4>
										</div>
										<div class="order">3</div>
									</div><!-- End Post item -->
								</div>
							</div><!-- End Widget top rated -->
								<!-- Widget Events -->
								<div class="widget">
									<div class="widget_title"><h3>Events</h3></div>
									<div class="tb_widget_timeline clearfix">
										<!-- Article -->
										<article>
											<span class="date">08/27/2014</span>
											<span class="time">11:19 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Progressively foster low-risk high-yield.</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">11/27/2014</span>
											<span class="time">14:59 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">How to make the perfect sweet potato casserole</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">03/8/2014</span>
											<span class="time">08:50 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Monotonectally strategize interactive users.</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">08/27/2014</span>
											<span class="time">11:19 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Progressively foster low-risk high-yield.</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">08/27/2014</span>
											<span class="time">11:19 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Progressively foster low-risk high-yield.</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">18/12/2013</span>
											<span class="time">14:00 PM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Uniquely parallel leadership via one-to-one.</a></h3>
											</div>
										</article><!-- End Article -->
										<!-- Article -->
										<article>
											<span class="date">10/4/2014</span>
											<span class="time">19:06 AM</span>
											<div class="timeline_content">
												<i class="fa fa-clock-o" jQuery></i>
												<h3><a href="post_single.html">Efficiently restore prospective alignments.</a></h3>
											</div>
										</article><!-- End Article -->
									</div>
								</div><!-- End Widget Events -->
								<!-- Widget Banners 125 -->
								<div class="widget">
									<div class="widget_title"><h3>Banner</h3></div>
									<div class="tb_widget_banner_125 clearfix">
										<a href="http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio" target="_blank">
											<img src="demo/125x125.png" alt="Banner">
										</a>
										<a href="http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio" target="_blank">
											<img src="demo/125x125.png" alt="Banner">
										</a>
										<a href="http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio" target="_blank">
											<img src="demo/125x125.png" alt="Banner">
										</a>
										<a href="http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio" target="_blank">
											<img src="demo/125x125.png" alt="Banner">
										</a>
									</div>
								</div><!-- End Widget Banners 125 -->
								<!-- Widget Recent list posts -->
								<div class="widget">
								<div class="widget_title"><h3>Recent posts</h3></div>
								<div class="tb_widget_recent_list clearfix">
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb">
											<div class="thumb_icon">
												<a href="post_single.html"><i class="fa fa-copy"></i></a>
											</div>
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x500/7.jpg" alt="Post" class="visible animated"></a>
											</div>
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Nam at maximus sed tempus est ultrices</a></h4>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb">
											<div class="thumb_icon">
												<a href="post_single.html"><i class="fa fa-copy"></i></a>
											</div>
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x500/8.jpg" alt="Post" class="visible animated"></a>
											</div>
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Nam at maximus sed tempus ultrices convallis</a></h4>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_thumb">
											<div class="thumb_icon">
												<a href="post_single.html"><i class="fa fa-copy"></i></a>
											</div>
											<div class="thumb_hover">
												<a href="post_single.html"><img src="demo/500x500/9.jpg" alt="Post" class="visible animated"></a>
											</div>
										</div>
										<div class="item_content">
											<h4><a href="post_single.html">Nam at maximus sed tempus est ultrices eget</a></h4>
											<div class="item_meta clearfix">
												<span class="meta_date">October 3, 2014</span>
												<span class="meta_likes"><a href="#">29</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
								</div>
							</div><!-- End Widget Recent list posts -->
								<!-- Widget posts -->
								<div class="widget">
								<div class="widget_title"><h3>Latest posts</h3></div>
								<div class="tb_widget_posts_big clearfix">
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Photo</span>Mercedes eager to retain world champion Lewis 2016</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">September 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">16</a></span>
												<span class="meta_likes"><a href="#">0</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Live</span>Robin van Persie may lose Manchester United place after dip in belief</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">June 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">371</a></span>
												<span class="meta_likes"><a href="#">64</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Video</span>Arsène Wenger calls players naive after Arsenal lose to Manchester United</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">May 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">4571</a></span>
												<span class="meta_likes"><a href="#">356</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Photo</span>Mercedes eager to retain world champion Lewis 2016</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">September 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">16</a></span>
												<span class="meta_likes"><a href="#">0</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Live</span>Robin van Persie may lose Manchester United place after dip in belief</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">June 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">371</a></span>
												<span class="meta_likes"><a href="#">64</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
									<!-- Post item -->
									<div class="item clearfix">
										<div class="item_content">
											<h4><a href="post_single.html"><span class="format" jQuery>Video</span>Arsène Wenger calls players naive after Arsenal lose to Manchester United</a></h4>
											<p>Aenean eu convallis elit. Quisque non felis vel tortor pellentesque consectetur vitae [...]</p>
											<div class="item_meta clearfix">
												<span class="meta_date">May 18, 2014</span>
												<span class="meta_comments"><a href="post_single.html">4571</a></span>
												<span class="meta_likes"><a href="#">356</a></span>
											</div>
										</div>
									</div><!-- End Post item -->
								</div>
							</div><!-- End Widget posts -->
								<!-- Tags -->
								<div class="widget">
									<div class="widget_title"><h3>Tags</h3></div>
									<div class="tb_widget_tagcloud clearfix">
										<a href="#">theme</a>
										<a href="#">psd</a>
										<a href="#">magazine</a>
										<a href="#">travel</a>
										<a href="#">video</a>
										<a href="#">codeo</a>
										<a href="#">html5</a>
										<a href="#">css</a>
										<a href="#">photoshop</a>
										<a href="#">creative</a>
										<a href="#">photography</a>
										<a href="#">topic</a>
										<a href="#">economy</a>
										<a href="#">category</a>
										<a href="#">contact</a>
									</div>
								</div>
								<!-- End Tags -->
								<!-- Widget top authors -->
								<div class="widget">
									<div class="widget_title"><h3>Top authors</h3></div>
									<div class="tb_widget_authors clearfix">
										<!-- Author -->
										<div class="author clearfix">
											<div class="author_avatar">
												<a href="#"><img src="demo/70x70/1.jpg" alt="Author"></a>
											</div>
											<div class="author_info">
												<h3><a href="#">Bryan Cranston</a></h3>
												<p class="role">Chef Executive Cook</p>
												<p class="articles">256 Articles</p>
											</div>
											<div class="order">1</div>
										</div><!-- End Author -->
										<!-- Author -->
										<div class="author clearfix">
											<div class="author_avatar">
												<a href="#"><img src="demo/70x70/2.jpg" alt="Author"></a>
											</div>
											<div class="author_info">
												<h3><a href="#">Aaron Paul</a></h3>
												<p class="role">Assistant Cook</p>
												<p class="articles">187 Articles</p>
											</div>
											<div class="order">2</div>
										</div><!-- End Author -->
										<!-- Author -->
										<div class="author clearfix">
											<div class="author_avatar">
												<a href="#"><img src="demo/70x70/3.jpg" alt="Author"></a>
											</div>
											<div class="author_info">
												<h3><a href="#">Bob Odenkirk</a></h3>
												<p class="role">Lawyer</p>
												<p class="articles">19 Articles</p>
											</div>
											<div class="order">3</div>
										</div><!-- End Author -->
									</div>
								</div><!-- End Widget top authors -->
							</div><!-- End Sidebar -->
						
						
					</div>
				</div>
			</section><!-- End Section -->
		</div>
        
        <?php require 'static/_footer.inc.php'; ?>

        <?php require 'static/_copyright.inc.php'; ?>

    </div><!-- End Wrapper -->
    
    <?php require 'static/_scripts.inc.php'; ?>   
<script>
	$(document).ready(function($) {
		"use strict";
		centerSearchBox();
	});
	//  Center Search box Vertically
	function centerSearchBox() {
		var $searchBox = $('.search-box-wrapper');
		var $header_main_parent = $('.header_main-parent').height();
		var $header_meta = $('.header_meta');
		var $navigation = $('#header');
		var positionFromBottom = 20;
		if ($('body').hasClass('home')){
			$('.wide_slider').css('top',$header_main_parent+'px');
			// $('.header_main-parent').css('z-index',30);
			// $searchBox.css('z-index',20);
		} else {
			$('.leaflet-map-pane').css('top',-50);
			$(".homepage-slider").css('margin-top', -$('.navigation header').height());
		}
		if ($(window).width() > 768) {
			$('.wide_slider .slide .slider_caption').css('margin-bottom',$navigation.height());
			$('.wide_slider').each(function () {
				if (!$('body').hasClass('horizontal-search-float')){
					var bannerHeight = $(this).height();
					$('.page-content').css('top', bannerHeight-$header_main_parent+'px');
					var contentHeight = $('.search-box').height();
					var top;
					//if($('body').hasClass('has-fullscreen-map')) {
						//top = (bannerHeight / 2) - (contentHeight / 2);
					//}
					//else {
						top = (bannerHeight / 2.5) - (contentHeight / 2) + $navigation.height();
					// }
					$('.search-box-wrapper').css('top', top);
				} else {
					$searchBox.css('top', $(this).height() + $navigation.height() - $searchBox.height() - positionFromBottom);
					$('.wide_slider .slide .slider_caption').css('margin-bottom',$navigation.height() + $searchBox.height() + positionFromBottom);
					if ( $('body').hasClass('has-fullscreen-map') ) {
						$('.search-box-wrapper').css('top', $(this).height() - $('.navigation').height());
					}
				}
			});
		}
	}
</script>
</body>
</html>
