<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<header id="header"><!--header-->

		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img src="../images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div> -->
							
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="<?=Url::to(['site/cart-show'])?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<!-- <li><a href="<=Url::to(['/blog'])?>"><i class="fa fa-lock"></i> Blog</a></li> -->


								<?php if(Yii::$app->user->isGuest) { ?>

								<li><a href="<?=Url::to('/site/login')?>"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="<?=Url::to('/site/signup')?>"><i class="fa fa-lock"></i> SignUp</a></li>
								<?php } else{

									echo Html::beginForm('site/logout', 'post')
									. Html::submitButton(
										'Logout (' . Yii::$app->user->identity->username . ')',
										['class' => 'btn btn-link logout']
									)
									. Html::endForm();

								} ?>




							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/site/index">Products</a></li>
										<li><a href="/product/index">Product Details</a></li> 
										<!-- <li><a href="checkout.html">Checkout</a></li> 
										<li><a href="site/cart">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  -->
                                    </ul>
                                </li> 
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li> -->
								<li><a href="<?=Url::to('/site/contact')?>">Contact</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	