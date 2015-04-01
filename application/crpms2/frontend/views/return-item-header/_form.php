<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_header_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'patient_last_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'patient_first_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'patient_middle_initial')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'bed_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
