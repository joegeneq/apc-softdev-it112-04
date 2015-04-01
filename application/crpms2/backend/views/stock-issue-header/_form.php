<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Item;
use backend\models\StockIssueDetails;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-issue-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'header_code')->textInput(['maxlength' => 20]) ?>

    

  
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

    <?php
        $stockissuedetails=stockIssueDetails::find()->all();
        $listData=ArrayHelper::map($stockissuedetails, 'id', 'stock_issue_code');
        echo $form->field($model, 'stock_issue_details_id')->dropDownList(
            $listData,['prompt'=>'Select Stock Issue Details']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
