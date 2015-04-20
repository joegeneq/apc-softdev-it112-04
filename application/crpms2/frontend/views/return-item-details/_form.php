<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\Helpers\ArrayHelper;
use backend\models\ReturnItemHeader;
use backend\models\Item;
/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $returnItemHeader=ReturnItemHeader::find()->all();
          $listData=ArrayHelper::map($returnItemHeader, 'id', 'return_item_header_code');
        echo $form->field($model, 'return_item_header_id')->dropDownList(
            $listData,['prompt'=>'Select Return Item Header']);

?>

   <?php
        $item=Item::find()->all();
          $listData=ArrayHelper::map($item, 'id', 'item_name');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item']);

?>
    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

       <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
