<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">
<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_details_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'return_item_header_id')->textInput() ?>

    <?= $form->field($model, 'accounting_status_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>



    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
