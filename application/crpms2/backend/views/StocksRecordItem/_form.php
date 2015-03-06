<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecordItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stocks-record-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'available_quantity')->textInput() ?>

    <?= $form->field($model, 'released_quantity')->textInput() ?>

    <?= $form->field($model, 'delivery_date')->textInput() ?>

    <?= $form->field($model, 'purchasing_status')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'stocks_record_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
