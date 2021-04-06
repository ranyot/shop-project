<?php
use yii\helpers\Url;

?>

    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    <?php foreach($carts as $cart) { ?> 
						<tr>
							
							<td class="cart_product">
								<img  style="width: 278px; height: 187px";  src="<?= Url::to('/images/products/'.$cart->image)?>" alt="" />
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$cart->name?></a></h4>
								<p>Web ID: <?=$cart->ikey?></p>
							</td>
							<td class="cart_price">
								<p>$<?=$cart->amount?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?=$cart->amount?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" onclick=deleteCartItem()><i class="fa fa-times"></i></a>
								<script>
									function deleteCartItem(id){
										var req = $.ajax({
										url: "/product/delete",
										cache: false,
										type:"POST",
										data:{id:id}										
										});	

										req.done((res)=>{
											alert("sucess", res)
										
										})
										req.fail(()=>{
											alert("err");
										})
									}
								</script>
							</td>
						</tr>

                    <?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
