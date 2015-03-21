<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;

use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnSlipForm */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="return-slip-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_last_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_first_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_middle_initial')->textInput(['maxlength' => 45]) ?>

   <?= $form->field($model, 'date')->widget(
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

    <?= $form->field($model, 'ward_id')->textInput() ?>

    <?= $form->field($model, 'bed_number_id')->textInput() ?>

    <?= $form->field($model, 'accounting_status_id')->textInput() ?>

    <?= $form->field($model, 'returned_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'received_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => 45]) ?>

      <?php
        $user=User::find()->all();
        $listData=ArrayHelper::map($user, 'id', 'username');
        echo $form->field($model, 'user_id')->dropDownList(
            $listData,['prompt'=>'Select User']);
		?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
