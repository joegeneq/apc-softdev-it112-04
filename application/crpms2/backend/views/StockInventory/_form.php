<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stock_inventory_id')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'quantity_onhand')->textInput() ?>

    <?= $form->field($model, 'quantity_onorder')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
