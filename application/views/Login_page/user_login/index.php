
<!DOCTYPE html>

<html dir="ltr" lang="zxx">

<head>
	<?php $this->load->view("includes/style.php"); ?>
</head>




<body class="no-trans    ">


	<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

	<div class="page-wrapper">
		
		<!-- header-container start -->
		

			<?php $this->load->view("includes/tophead.php"); ?>
			<?php $this->load->view("includes/header.php"); ?>

		<?php $this->load->view("$view_folder/user_login/content"); ?>

		<?php $this->load->view("includes/footer.php"); ?>

	</div>



	<?php $this->load->view("includes/script.php"); ?>


</body>
</html>