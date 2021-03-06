<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GenericName */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="generic-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'generic_name')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
