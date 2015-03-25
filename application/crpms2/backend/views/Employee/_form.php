<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'position_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
