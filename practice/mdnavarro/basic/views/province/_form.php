<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Region;

/* @var $this yii\web\View */
/* @var $model app\models\Province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>
        
    <?= $form->field($model, 'province_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'province_description')->textInput(['maxlength' => 32]) ?>

        <?php 
                $region=region::find()->all();

                $listData=ArrayHelper::map($region,'id','region_code');

                echo $form->field($model, 'region_id')->dropDownList(
                                                                $listData, 
                                                                ['prompt'=>'Select region...']);
        ?>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>