<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Patient;
use backend\models\Employee;
use backend\models\AccountingStatus;
use backend\models\Bed;
use backend\models\Location;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="return-item-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_header_code')->textInput(['maxlength' => 20]) ?>

   <?= $form->field($model, 'date_prepared')->widget(
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
     <?= $form->field($model, 'patient_id')->dropDownList(
        ArrayHelper::map(Patient::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Patient'] ) 
    ?>
     <?php
        $location=Location::find()->all();
          $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select location']);

?>
    <?php
        $bed=Bed::find()->all();
          $listData=ArrayHelper::map($bed, 'id', 'bed_number');
        echo $form->field($model, 'bed_id')->dropDownList(
            $listData,['prompt'=>'Select bed number']);

?>
    <?= $form->field($model, 'total_amount')->textInput(['maxlength' => 10]) ?>

     <?= $form->field($model, 'returned_by')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Returned by'] ) 
    ?>
    <?= $form->field($model, 'received_by')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Receive by'] ) 
    ?>
 <?= $form->field($model, 'approved_by')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select approved by'] ) 
    ?>
	
      <?php
        $accountingStatus=AccountingStatus::find()->all();
          $listData=ArrayHelper::map($accountingStatus, 'id', 'description');
        echo $form->field($model, 'accounting_status_id')->dropDownList(
            $listData,['prompt'=>'Select Accounting Status']);

?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
