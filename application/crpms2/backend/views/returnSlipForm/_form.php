<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\ReturnSlipForm */
/* @var $form yii\widgets\ActiveForm */
?>

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

    <?= $form->field($model, 'ward_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'bed_number')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'returned_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'received_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'accounting_status')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
