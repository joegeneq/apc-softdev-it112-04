<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\StockInventory;
use backend\models\StockStatus;
use backend\models\Employee;
/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueDetails */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="stock-issue-details-form">

    <?php $form = ActiveForm::begin(); ?>
 <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>
 <?php
        $stockinventory=StockInventory::find()->all();
        $listData=ArrayHelper::map($stockinventory, 'id', 'stock_inventory_id');
        echo $form->field($model, 'stock_inventory_id')->dropDownList(
            $listData,['prompt'=>'Select Stock Inventory']);
    ?>
    <?= $form->field($model, 'stock_issue_code')->textInput(['maxlength' => 20]) ?>

 <?php
        $stockstatus=StockStatus::find()->all();
        $listData=ArrayHelper::map($stockstatus, 'id', 'description_name');
        echo $form->field($model, 'stock_status_id')->dropDownList(
            $listData,['prompt'=>'Select Stock Issued Id']);
    ?>
    <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Employee'] ) 
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
