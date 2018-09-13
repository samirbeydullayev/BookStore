<div class="main-container dark-translucent-bg" style="background-image:url('images/background-img-6.jpg');">
	<div class="container">
		<div class="row">


			<!-- main start -->
			<!-- ================ -->
			<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="form-block center-block p-30 light-gray-bg border-clear">
					<h2 class="title">Login</h2>

						<form class="form-horizontal"  action="<?php echo base_url('login_post') ?>" method="post">
                               
                               <?php
                                $remember_me = $this->session->userdata("remember_me");

                               ?>

							<div class="form-group has-feedback">
								<label for="inputUserName" class="col-sm-3 control-label">User Name</label>
								<div class="col-sm-8">
									<input type="text"
									 class="form-control" 
									 id="inputUserName"
									 value="<?php echo (isset($form_error)) ? set_value('username') : (isset($remember_me)) ? $remember_me->username : ''  ?>" 
									 name="username" 
									 placeholder="User Name" >
									<i class="fa fa-user form-control-feedback"></i>

									<?php if (isset($form_error)){ ?>
										<small   style="color: red;"  ><?php echo form_error('username') ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="form-group has-feedback">
								<label for="inputPassword" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-8">
									<input 
									type="password"
									 class="form-control"
									 id="inputPassword"
									 name="password"
									 value="<?php echo (isset($remember_me)) ? $remember_me->password : ''   ?>" 
									 placeholder="Password" >
									<i class="fa fa-lock form-control-feedback"></i>
									<?php if (isset($form_error)){ ?>
										<small   style="color: red;"  ><?php echo form_error('password') ?></small>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8">
									<div class="checkbox">
										<label>
											<input type="checkbox"  name="remember_me" <?php echo (isset($remember_me)) ? "checked" : "" ?>  > Remember me.
										</label>
									</div>											
									<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
									<ul class="space-top">
										<li 
										class="forgot_pass" 
										style="cursor: pointer"
										>
									Forgot your password?</li>
								</ul>
								<span class="text-center text-muted">Login with</span>
								<ul class="social-links colored circle clearfix">
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<p class="text-center space-top">Don't have an account yet? <a href="<?php echo base_url('sign_up') ?>">Sing up</a> now.</p>
			</div>
			<!-- main end -->
		</div>
	</div>
</div>