<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */

// $conditions = ['New'=>'New', 'Old'=>'Old', 'Sepecial'=>'Special'];

?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

     <!-- $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?> -->

    <!-- <= $form->field($upload, 'imageFiles[]')->fileInput(['multiple' => true]) ?> -->
    <?php  echo $form->field($upload, 'imageFiles[]')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*', 'multiple' => true],
     ]);
    ?>

    <?= $form->field($upload, 'product_id')->dropDownList($products) ?>

    <!-- = $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
