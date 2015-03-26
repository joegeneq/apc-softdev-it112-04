<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Position;
use backend\models\User;
/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => 20]) ?>

    <?php
        $position=Position::find()->all();
        $listData=ArrayHelper::map($position, 'id', 'position_name');
        echo $form->field($model, 'position_id')->dropDownList(
            $listData,['prompt'=>'Select Position']);
    ?>

    <?php
        $users=User::find()->all();
        $listData=ArrayHelper::map($users, 'id', 'username');
        echo $form->field($model, 'user_id')->dropDownList(
            $listData,['prompt'=>'Select User']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
