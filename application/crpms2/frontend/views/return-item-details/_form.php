<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\Item;
use backend\models\ReturnItemHeader;
use backend\models\AccountingStatus;
use backend\models\Employee;


/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_details_code')->textInput(['maxlength' => 20]) ?> 

    <?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_name');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item Name']);
    ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <!----?= $form->field($model, 'location_id')->textInput() ?---->
    <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>


    <!----?= $form->field($model, 'return_item_header_id')->textInput() ?---->
    <?php
        $returnItemHeader=ReturnItemHeader::find()->all();
        $listData=ArrayHelper::map($returnItemHeader, 'id', 'return_item_header_code');
        echo $form->field($model, 'return_item_header_id')->dropDownList(
            $listData,['prompt'=>'Select Header Code']);
    ?>

    <?= $form->field($model, 'accounting_status_id')->textInput() ?>
    <?php
        $accountingStatus=AccountingStatus::find()->all();
        $listData=ArrayHelper::map($accountingStatus, 'id', 'description');
        echo $form->field($model, 'accounting_status_id')->dropDownList(
            $listData,['prompt'=>'Select Accounting Status']);
    ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($employee, 'id', 'lastname','firstname');
        echo $form->field($model, 'employee_id')->dropDownList(
            $listData,['prompt'=>'Select Employee']);
    ?>

    <?= $form->field($model, 'return_to')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
