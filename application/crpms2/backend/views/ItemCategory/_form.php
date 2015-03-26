<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\ItemCategory;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\ItemCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="item-category-form">

    <?php $form = ActiveForm::begin(); ?>

 <?php
        $itemcategory=ItemCategory::find()->all();
        $listData=ArrayHelper::map($itemcategory, 'id', 'category_id');
        echo $form->field($model, 'category_name')->dropDownList(
            $listData,['prompt'=>'Select Category']);
    ?>


    <?= $form->field($model, 'category_name')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
