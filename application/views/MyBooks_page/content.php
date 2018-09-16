 

<div class="container" >
	<div class="row" style="margin-top: 5%;">

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
	<?php } ?>
	</div>
</div>