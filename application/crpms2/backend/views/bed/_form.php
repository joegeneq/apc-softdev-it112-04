<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\BedStatus;
/* @var $this yii\web\View */
/* @var $model backend\models\Bed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bed_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'bed_number')->textInput() ?>

     <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location']);
    ?>

    <?= $form->field($model, 'bed_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bed_comments')->textarea(['rows' => 6]) ?>

    <?php
        $bedStatus=BedStatus::find()->all();
        $listData=ArrayHelper::map($bedStatus, 'id', 'status_name');
        echo $form->field($model, 'bed_status_id')->dropDownList(
            $listData,['prompt'=>'Select Bed Status']);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
