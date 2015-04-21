<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\User;
/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_header_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'unit_cost')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>
    <?php
        $user=User::find()->all();
        $listData=ArrayHelper::map($user, 'id', 'username');
        echo $form->field($model, 'created_by')->dropDownList(
            $listData,['prompt'=>'Select Generic Name']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
