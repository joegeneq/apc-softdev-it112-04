<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Patient;
use backend\models\Employee;
use backend\models\AccountingStatus;
use backend\models\Bed;
use backend\models\Location;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="return-item-header-form">

    <?php $form = ActiveForm::begin(); ?>

  <?php $form = ActiveForm::begin(); ?>

    	<?= $form->field($model, 'patient_id')->dropDownList(
        ArrayHelper::map(Patient::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Patient'] ) 
    ?>

    <?= $form->field($model, 'return_item_header_code')->textInput(['maxlength' => 20]) ?>
	
   <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location:']);
        ?>
 <?php
        $bed=Bed::find()->all();
          $listData=ArrayHelper::map($bed, 'id', 'bed_number');
        echo $form->field($model, 'bed_id')->dropDownList(
            $listData,['prompt'=>'Select Bed number']);
    ?>
    <?= $form->field($model, 'total_amount')->textInput(['maxlength' => 10]) ?>

   <?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Employee'] ) 
    ?>
     <?= $form->field($model, 'employee_lastname')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Employee'] ) 
    ?>
 <?= $form->field($model, 'employee_firstname')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Employee'] ) 
    ?>
     <?php
        $bed=Bed::find()->all();
          $listData=ArrayHelper::map($bed, 'id', 'description');
        echo $form->field($model, 'accounting_status_id')->dropDownList(
            $listData,['prompt'=>'Select Accounting Status']);

?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
