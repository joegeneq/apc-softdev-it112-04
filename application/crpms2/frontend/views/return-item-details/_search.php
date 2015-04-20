<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="return-item-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'return_item_header_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'unit_cost') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
