<?php


use yii\helpers\Url;
use frontend\components\ReduceDescription;
?>

<div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
				<div class="productinfo text-center ">
					<img src="<?= Url::to('/images/products/'.$model->image)?>" alt="" />
					<h2>$<?=$model->amount?></h2>
					<p><?=$model->name?></p>

					<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
					<form action="<?= Url::to('site/cart')?>" method="post">
						<input name="pid" type="hidden" value="<?=$model->id?>">
						<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</form>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>$<?=$model->amount?></h2>
						<p><?=$model->name?><br><?=ReduceDescription::widget(['body'=>$model->description,'count'=>10])?></p>
						<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
					<form action="<?= Url::to('/site/cart')?>" method="post">
						<input name="pid" type="hidden" value="<?=$model->id?>">
						<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</form>

					<a href="<?=Url::to(['/product','id'=>$model->id])?>">View Product</a>
					</div>
				</div>
		</div>
		<div class="choose">
			<ul class="nav nav-pills nav-justified">
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
				<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
			</ul>
		</div>
	</div>
</div>