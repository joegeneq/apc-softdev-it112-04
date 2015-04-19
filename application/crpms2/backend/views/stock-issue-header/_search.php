<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeaderSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="stock-issue-header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'stock_issue_header_code') ?>

    <?= $form->field($model, 'date_prepared') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'stock_inventory_id') ?>

    <?php // echo $form->field($model, 'stock_status_id') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <?php // echo $form->field($model, 'employee_lastname') ?>

    <?php // echo $form->field($model, 'employee_firstname') ?>

    <?php // echo $form->field($model, 'employee_middlename') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'date_updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
