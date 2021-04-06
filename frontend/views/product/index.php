<?php
use yii\helpers\Url;

?>

<section>
    <div class="container">
        <div class="row">
            

<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<!-- <img src="/images/products/<?=$product->image?>" alt=""> -->
								<img src="<?=Url::to('@web/images/products/'.$product->image)?>" alt="">
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										
										<div class="item active">
										  <?php foreach($product->pictures as $picture){?> 

										  <!-- <a href=""><img width="100" height="60" src="<?=Url::to('@web/images/products/'.$picture->image)?>" alt=""></a> -->

										  <a href=""><img width="100" height="60" src="/images/products/<?=$picture->image?>" alt=""></a>

										  <?php } ?>

										  <!-- <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a> -->
										</div>
										
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="">
								<h2><?=$product->name?></h2>
								<p>Web ID: <?=$product->ikey?></p>
								<img src="images/product-details/rating.png" alt="">
								<span>
									<span>US $<?=$product->amount?></span>
									<label>Quantity:</label>
									<input type="text" value="3">

                                    <form action="<?=Url::to(['site/cart'])?>" method="post">
												<input name="pid" type="hidden" value="<?=$product->id?>">
                                                <button href="site/cart" type="button" class="btn btn-fefault cart">
												<a href="site/cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </button>
									</form>

									
								</span>
								<p><b>Availability:</b> <?=$product->availability?></p>
								<p><b>Condition:</b> <?=$product->prod_condition?></p>
								<p><b>Brand:</b> <?=$product->brand?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="">
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>

                
        </div>
    </div>
</section>