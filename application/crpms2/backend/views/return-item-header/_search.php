<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeaderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'return_item_header_code') ?>

    <?= $form->field($model, 'date_prepared') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'bed_id') ?>

    <?php // echo $form->field($model, 'total_amount') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <?php // echo $form->field($model, 'employee_lastname') ?>

    <?php // echo $form->field($model, 'employee_firstname') ?>

    <?php // echo $form->field($model, 'accounting_status_id') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'date_updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
