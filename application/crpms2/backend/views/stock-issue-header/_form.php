<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\StockInventory;
use backend\models\Employee;
use backend\models\StockIssueHeader;
use backend\models\StockIssueDetails;
use backend\models\StockStatus;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="stock-issue-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <!----?= $form->field($model, 'location_id')->textInput() ?---->
     <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location:']);
        ?>

    <!----?= $form->field($model, 'stock_inventory_id')->textInput() ?---->
     <?php
        $stockInventory=StockInventory::find()->all();
        $listData=ArrayHelper::map($stockInventory, 'id', 'stock_inventory_id');
        echo $form->field($model, 'stock_inventory_id')->dropDownList(
            $listData,['prompt'=>'Select Stock Inventory:']);
        ?>

    <?= $form->field($model, 'header_code')->textInput(['maxlength' => 20]) ?>
     <!----?php
        $stockIssueHeader=StockIssueHeader::find()->all();
        $listData=ArrayHelper::map($stockIssueHeader, 'id', 'header_code');
        echo $form->field($model, 'stock_issue_header_id')->dropDownList(
            $listData,['prompt'=>'Select Header Code:']);
        ?---->

    <?= $form->field($model, 'stock_issue_code')->textInput(['maxlength' => 20]) ?>
     <!----?php
        $stockIssueDetails=StockIssueDetails::find()->all();
        $listData=ArrayHelper::map(stockIssueDetails, 'id', 'stock_issue_code');
        echo $form->field($model, 'stock_issue_code')->dropDownList(
            $listData,['prompt'=>'Select Stock Issue Code:']);
        ?---->

    <!----?= $form->field($model, 'stock_status_id')->textInput() ?---->
     <?php
        $stockStatus=StockStatus::find()->all();
        $listData=ArrayHelper::map($stockStatus, 'id', 'description_name');
        echo $form->field($model, 'stock_status_id')->dropDownList(
            $listData,['prompt'=>'Select Stock Status:']);
        ?>

    <!----?= $form->field($model, 'employee_id')->textInput() ?---->
     <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'lastname','firstname');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Employee Name:']);
        ?>

    <?= $form->field($model, 'issue_from')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
