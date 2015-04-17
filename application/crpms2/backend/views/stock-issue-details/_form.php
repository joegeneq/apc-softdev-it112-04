<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\StockIssueHeader;
use backend\models\Item;
/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-issue-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stock_issue_code')->textInput(['maxlength' => 20]) ?>

    <?php
        $stockIssueHeader=StockIssueHeader::find()->all();
        $listData=ArrayHelper::map($stockIssueHeader, 'id', 'header_code');
        echo $form->field($model, 'stock_issue_header_id')->dropDownList(
            $listData,['prompt'=>'Select Item']);
    ?>  
     <?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_code');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item']);
    ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'exp_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
        'inline' => false, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]);?>



    <?= $form->field($model, 'unit_cost')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

   
    


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
