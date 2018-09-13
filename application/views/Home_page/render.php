
<div class="btn-group dropdown">
	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
</div>
<div class="btn-group dropdown basket">
	<button type="button" class="btn dropdown-toggle add_btn" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">

		<?php if(isset($_SESSION["items"])) {?>
			<?php echo count($_SESSION["items"]) ?>
		<?php }else{ ?>
			0
		<?php } ?>
		
	</span></button>
	
	

	
	<ul class=" book_list dropdown-menu dropdown-menu-right dropdown-animation cart book_list">

		<li>
			<table class="table table-hover">
				<thead>
					<tr>

						<th >Book Name</th>
						<th >Price</th>
						<th >Remove List</th>

					</tr>
				</thead>
				<tbody class="tbody" >
					 <?php if(isset($_SESSION["items"])) {?>
					<?php foreach ($_SESSION["items"] as $item ) {?>
						<tr >
							<td ><?php echo $item->name ?></td>
							<td ><?php echo $item->price ?></td>
							<td>
								<button 
								 class="btn btn-sm btn-danger book_remove"
								 data-bookid = "<?php echo $item->id ?>"
								 data-url = "<?php echo base_url("Home/basket_remove") ?>"
								  >Remove</button>
							</td>
						</tr>
					<?php } } ?>

					
					
					

					<tr>
						<td class="total-quantity" colspan="2">Total 		<?php if(isset($_SESSION["items"])) {?>
							<?php echo count($_SESSION["items"]) ?>
						<?php }else{ ?>
							0
							<?php } ?>  Books </td>


							<td class="total-amount">

								<?php if(isset($_SESSION["items"])) {?>
								<?php
								$sum = 0;
								foreach ($_SESSION["items"] as $item ) {  ?>
									<?php  $sum += $item->price ?>


								<?php } ?>
								<?php echo $sum."  $"; ?>

							<?php }else{ ?>
                               0 $
							<?php } ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="panel-body text-right">

					<a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Buy ALL</a>
				</div>
			</li>

		</ul>




	</div>
