<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnSlipFormSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-slip-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_last_name') ?>

    <?= $form->field($model, 'patient_first_name') ?>

    <?= $form->field($model, 'patient_middle_initial') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'ward_id') ?>

    <?php // echo $form->field($model, 'bed_number_id') ?>

    <?php // echo $form->field($model, 'accounting_status_id') ?>

    <?php // echo $form->field($model, 'returned_by') ?>

    <?php // echo $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
