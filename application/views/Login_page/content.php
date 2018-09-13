<div class="main-container dark-translucent-bg" style="background-image:url('<?php echo base_url('assets/') ?>images/background-img-6.jpg');">
	<div class="container">
		<div class="row">
			<!-- main start -->
			<!-- ================ -->
			<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="form-block center-block p-30 light-gray-bg border-clear">
					<h2 class="title">Sign Up</h2>
					<form class="form-horizontal" role="form" action="<?php echo base_url('sign_post') ?>"  method="post">

						<div class="form-group has-feedback">
							<label for="inputUserName" class="col-sm-3 control-label">User Name <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputUserName" name="username" placeholder="User Name" value="<?php echo (isset($form_error)) ? set_value('username') : "" ?>" >
								<i class="fa fa-user form-control-feedback"></i>

								<?php if (isset($form_error)){ ?>
									<small   style="color: red;"  ><?php echo form_error('username') ?></small>
								<?php } ?>
							</div>

						</div>
						<div class="form-group has-feedback">
							<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?php echo (isset($form_error)) ? set_value('email') : "" ?>" >
								<i class="fa fa-envelope form-control-feedback"></i>

									<?php if (isset($form_error)){ ?>
									<small   style="color: red;"  ><?php echo form_error('email') ?></small>
								<?php } ?>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" 
								value="<?php echo (isset($form_error)) ? set_value('password') : "" ?>">
								<i class="fa fa-lock form-control-feedback"></i>

									<?php if (isset($form_error)){ ?>
									<small   style="color: red;"  ><?php echo form_error('password') ?></small>
								<?php } ?>
							</div>
						</div>

						<div class="form-group has-feedback">
							<label for="inputPassword" class="col-sm-3 control-label">Re-Password <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="password" name="con_password" class="form-control" id="inputPassword" placeholder="Confirm Password" value="<?php echo (isset($form_error)) ? set_value('con_password') : "" ?>" >
								<i class="fa fa-lock form-control-feedback"></i>

									<?php if (isset($form_error)){ ?>
									<small   style="color: red;"  ><?php echo form_error('con_password') ?></small>
								<?php } ?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
								<button type="submit" class="btn btn-group btn-default btn-animated">Sign Up <i class="fa fa-check"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- main end -->
		</div>
	</div>
</div>