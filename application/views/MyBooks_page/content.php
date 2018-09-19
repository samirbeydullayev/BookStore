 

<div class="container" >
	<div class="row" style="margin-top: 5%;">

        <?php if(!empty($my_books)) {?>
		<?php foreach ($my_books  as $mb ) {?>

		<div  class="col-sm-6 col-md-3">
			<div class="pv-30 ph-20 white-bg feature-box bordered text-center">
				<div  style="height: 350px;">
					<img width="100%" style="height: 100%;" src="<?php echo base_url("panel/uploads/books_image/$mb->img_url") ?>">
				</div>
				<div class="separator clearfix"></div>
				 <h2 style="font-size: 18px;" ><?php echo $mb->name ?></h2>
				<a href="<?php echo base_url("panel/uploads/books_pdf/$mb->pdf_url") ?>" class="btn btn-default btn-animated">Go read <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	<?php } } else{?>

		<div  style="margin-top: 10%; margin-bottom: 10%" class="col-md-12 text-center alert alert-danger">
			<h1>You have not Book :(. Do you buy book? Now <a style="color: blue;" href="<?php echo base_url("Home/index") ?>">Click me</a> </h1>
		</div>

	<?php } ?>

 
	</div>
</div>