<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Patient;
use frontend\models\Location;
use frontend\models\Bed;
use frontend\models\Item;
/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-header-form">

    <?php $form = ActiveForm::begin(); ?>

    
     <?= $form->field($model, 'patient_id')->dropDownList(
        ArrayHelper::map(Patient::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Patient'] ) 
    ?>


    <?= $form->field($model, 'return_item_header_code')->textInput(['maxlength' => 20]) ?>

    <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select location']);
    ?>

    <?php
        $bed=Bed::find()->all();
        $listData=ArrayHelper::map($bed, 'id', 'bed_number');
        echo $form->field($model, 'bed_id')->dropDownList(
            $listData,['prompt'=>'Select Bed Number']);
    ?>

   <?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_name');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item Name']);
    ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
