<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnSlipForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-slip-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'patient_last_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_first_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'patient_middle_initial')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'ward_id')->textInput() ?>

    <?= $form->field($model, 'bed_number_id')->textInput() ?>

    <?= $form->field($model, 'accounting_status_id')->textInput() ?>

    <?= $form->field($model, 'returned_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'received_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
