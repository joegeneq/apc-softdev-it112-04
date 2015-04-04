<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-issue-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'stock_inventory_id')->textInput() ?>

    <?= $form->field($model, 'stock_issue_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'stock_status_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <?= $form->field($model, 'issue_from')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
