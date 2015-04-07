<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id_no')->textInput() ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
