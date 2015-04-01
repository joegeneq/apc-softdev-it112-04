<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\AccountingStatus;
use backend\models\Employee;
use backend\models\ReturnItemHeader;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_details_code')->textInput(['maxlength' => 20]) ?>

    <!----?= $form->field($model, 'location_id')->textInput() ?---->
    <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>

    <?= $form->field($model, 'return_item_header_id')->textInput() ?>

    <!----?= $form->field($model, 'accounting_status_id')->textInput() ?---->
    <?php
        $accountingstatus=AccountingStatus::find()->all();
        $listData=ArrayHelper::map($accountingstatus, 'id', 'description');
        echo $form->field($model, 'accounting_status_id')->dropDownList(
            $listData,['prompt'=>'Select Status']);
    ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>
    <?php
        $employee=Employee::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Employee']);
    ?>

    <?= $form->field($model, 'return_to')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
