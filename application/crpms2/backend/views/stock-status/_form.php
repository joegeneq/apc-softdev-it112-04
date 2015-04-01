<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockStatus */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="stock-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'description_name')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>