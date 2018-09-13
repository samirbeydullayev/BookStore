<div class="header-top dark ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
												<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<div class="header-top-dropdown text-right">
										<div class="btn-group">
											<?php
											  $user =   $this->session->userdata( "user"); 
											  if(isset($user)){
											?>

											<a href="<?php echo base_url('sign_up') ?>" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> <?php echo $user->username ?></a>

										<?php } else { ?>

											<a href="<?php echo base_url('sign_up') ?>" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>

										<?php } ?>
                                                 	
											
										</div>

											<?php
											  $user = $this->session->userdata("user"); 
											  if(isset($user)){
											?>
                                             
                                             	<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm"> <a style="color: white;text-decoration: none;" href="<?php echo base_url('login_out') ?>">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a> </button>
									
										</div>

											<?php } else { ?>
                                                
                                                 	<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm"><i class="fa fa-lock pr-10"></i> <a style="color: white;text-decoration: none;" href="<?php echo base_url('user_login') ?>">Login</a> </button>
									
										</div>

												<?php } ?>
									
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div