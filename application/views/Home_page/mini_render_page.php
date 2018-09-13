
					 <?php if(isset($_SESSION["items"])) {?>
					<?php foreach ($_SESSION["items"] as $item ) {?>
						<tr>
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
		