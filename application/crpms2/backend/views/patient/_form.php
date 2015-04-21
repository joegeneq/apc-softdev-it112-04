<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id_no')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'birthdate')->widget(
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
    <?= $form->field($model, 'telephone_number')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'cellphone_number')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => 25]) ?>

   <?php
        $user=User::find()->all();
        $listData=ArrayHelper::map($user, 'id', 'username');
        echo $form->field($model, 'created_by')->dropDownList(
            $listData,['prompt'=>'Select User']);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
