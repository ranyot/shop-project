<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

preg_match('#\((.*?)\)#',$name,$match);
echo $code = substr($match[1],1);
echo $msg = strtolower(trim(strstr($name,'(',true)));

die;


?>

    <!-- <div class="container text-center">
		<div class="logo-404">
			<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="/images/404/404.png" class="img-responsive" alt="" />
			<h1><b><?= Html::encode($this->title) ?></b><?= nl2br(Html::encode($message)) ?></h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="index.html">Bring me back Home</a></h2>
		</div>
	</div> -->




<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
