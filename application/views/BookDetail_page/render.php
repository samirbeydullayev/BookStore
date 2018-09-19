				<?php $user = $this->session->userdata("user"); ?>
			
			<?php foreach ($one_book_reviews as $obr) {?>

				<div class="comment clearfix">
					<div class="comment-avatar">
						<img class="img-circle" src="<?php echo base_url("assets/") ?>images/avatar.jpg" alt="avatar">
					</div>
					<header>
						<h6><?php echo $obr->username ?></h6>
						<div class="comment-meta"> 
							<i class="fa fa-star  <?php echo ($obr->vote>=1) ? "text-default" : "" ?>"></i> 
							<i class="fa fa-star  <?php echo ($obr->vote>=2) ? "text-default" : "" ?>" "></i>
							<i class="fa fa-star  <?php echo ($obr->vote>=3) ? "text-default" : "" ?>""></i> 
							<i class="fa fa-star  <?php echo ($obr->vote>=4) ? "text-default" : "" ?>""></i>
							<i class="fa fa-star <?php echo ($obr->vote==5) ? "text-default" : "" ?>""></i> | <?php echo strftime('%e %B %Y %H:%M',strtotime($obr->review_time)) ?></div>
						</header>
						<div class="comment-content">
							<div class="comment-body clearfix">
								<p><?php echo $obr->review ?></p>

							</div>
						</div>
					</div>

					<?php } ?>