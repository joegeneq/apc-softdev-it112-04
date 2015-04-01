<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeaderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-issue-header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'header_code') ?>

    <?= $form->field($model, 'date_created') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'exp_date') ?>

    <?php // echo $form->field($model, 'unit_cost') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'stock_issue_details_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
