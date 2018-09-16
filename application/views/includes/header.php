	<header class="header  fixed    clearfix">

		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<!-- header-first start -->
					<!-- ================ -->
					<div class="header-first clearfix">

						<!-- header dropdown buttons -->

						<!-- header dropdown buttons end-->

						<!-- logo -->
						<div id="logo" class="logo">
							<a href="<?php echo base_url('home/index') ?>"><img id="logo_img" src="<?php echo base_url('assets/') ?>images/logo_light_blue.png" alt="The Project"></a>
						</div>

						<!-- name-and-slogan -->
						<div class="site-slogan">
							Multipurpose HTML5 Template
						</div>

					</div>
					<!-- header-first end -->

				</div>
				<div class="col-md-9">
					
					<!-- header-second start -->
					<!-- ================ -->
					<div class="header-second clearfix">

						<!-- main-navigation start -->
						<!-- classes: -->
						<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
						<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
						<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
						<!-- ================ -->
						<div class="main-navigation  animated with-dropdown-buttons">

							<!-- navbar start -->
							<!-- ================ -->
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">

									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>

									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="navbar-collapse-1">
										<!-- main-menu -->
										<ul class="nav navbar-nav ">

											<!-- mega-menu start -->
											<li class="dropdown  mega-menu">
												<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
											</li>
											<!-- mega-menu end -->
											<!-- mega-menu start -->

											<!-- mega-menu end -->
											<?php $user = $this->session->userdata("user"); ?>
											<?php if($user){ ?>
											<li class="dropdown ">
												<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url("my_books") ?>">My Books</a>
											</li>
										<?php } ?>
											<!-- mega-menu start -->
											<li class="dropdown  mega-menu narrow">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Components</a>
											</li>
											<!-- mega-menu end -->
											<li class="dropdown ">
												<a href="portfolio-grid-2-3-col.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
											</li>
											<li class="dropdown active">
												<a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">

													Shop</a>
											</li>
											<li class="dropdown ">
												<a href="blog-large-image-right-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
											</li>
										</ul>
										<!-- main-menu end -->

										<!-- header dropdown buttons -->
										<div class=" header-dropdown-buttons hidden-xs ">
                                             <?php $this->load->view('Home_page/render'); ?>
										</div>
										<!-- header dropdown buttons end-->
                                     
									</div>

								</div>
							</nav>
							<!-- navbar end -->

						</div>
						<!-- main-navigation end -->
					</div>
					<!-- header-second end -->
					
				</div>
			</div>
		</div>

	</header>