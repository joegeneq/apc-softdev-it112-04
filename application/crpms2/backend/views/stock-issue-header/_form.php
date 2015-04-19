<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\StockIssueHeader;
use backend\models\Location;
use backend\models\StockInventory;
use backend\models\StockStatus;
use backend\models\Employee;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="stock-issue-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stock_issue_header_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'date_prepared')->textInput() ?>

    <!----?= $form->field($model, 'location_id')->textInput() ?---->
    <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>

    <!----?= $form->field($model, 'stock_inventory_id')->textInput() ?---->
    <?php
        $stockInventory=StockInventory::find()->all();
        $listData=ArrayHelper::map($stockInventory, 'id', 'stock_inventory_code');
        echo $form->field($model, 'stock_inventory_id')->dropDownList(
            $listData,['prompt'=>'Select Inventory Code']);
    ?>

    <!----?= $form->field($model, 'stock_status_id')->textInput() ?---->
    <?php
        $stockStatus=StockStatus::find()->all();
        $listData=ArrayHelper::map($stockStatus, 'id', 'description_name');
        echo $form->field($model, 'stock_status_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>

    <!----?= $form->field($model, 'employee_id')->textInput() ?---->
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'emp_code');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Employee Code']);
    ?>

    <!----?= $form->field($model, 'employee_lastname')->textInput() ?---->
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'lastname');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Lastname']);
    ?>

    <!----?= $form->field($model, 'employee_firstname')->textInput() ?---->
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'firstname');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Firstname']);
    ?>

    <!----?= $form->field($model, 'employee_middlename')->textInput() ?---->
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'middlename');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Middlename']);
    ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
