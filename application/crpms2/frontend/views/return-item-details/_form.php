<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Item;
use backend\models\ReturnItemHeader;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <!----?= $form->field($model, 'return_item_header_id')->textInput() ?---->
    <?php
        $returnItemHeader=ReturnItemHeader::find()->all();
        $listData=ArrayHelper::map($returnItemHeader, 'id', 'return_item_header_code');
        echo $form->field($model, 'return_item_header_id')->dropDownList(
            $listData,['prompt'=>'Select Item Header Code']);
    ?>

    <!----?= $form->field($model, 'item_id')->textInput() ?---->
    <?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_code');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item']);
    ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'unit_cost')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
