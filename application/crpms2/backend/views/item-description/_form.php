<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemDescription */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_code')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
