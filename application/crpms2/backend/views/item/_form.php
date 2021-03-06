<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ItemCategory;
use backend\models\Manufacturer;
use backend\models\GenericName;
use backend\models\UnitOfMeasure;


/* @var $this yii\web\View */
/* @var $model backend\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_code')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 20]) ?>

    <!----?= $form->field($model, 'item_category_id')->textInput() ?---->
    <?php
        $itemCategory=ItemCategory::find()->all();
        $listData=ArrayHelper::map($itemCategory, 'id', 'category_name');
        echo $form->field($model, 'item_category_id')->dropDownList(
            $listData,['prompt'=>'Select Item Category']);
    ?>

    <!----?= $form->field($model, 'manufacturer_id')->textInput() ?---->
    <?php
        $manufacturer=Manufacturer::find()->all();
        $listData=ArrayHelper::map($manufacturer, 'id', 'manufacturer_name');
        echo $form->field($model, 'manufacturer_id')->dropDownList(
            $listData,['prompt'=>'Select Manufacturer']);
    ?>

    <!----?= $form->field($model, 'generic_name_id')->textInput() ?---->
    <?php
        $genericName=GenericName::find()->all();
        $listData=ArrayHelper::map($genericName, 'id', 'generic_name');
        echo $form->field($model, 'generic_name_id')->dropDownList(
            $listData,['prompt'=>'Select Generic Name']);
    ?>

    <?= $form->field($model, 'minimum_reorder_quantity')->textInput() ?>

    <!----?= $form->field($model, 'unit_of_measure_id')->textInput() ?---->
    <?php
        $unitOfMeasure=UnitOfMeasure::find()->all();
        $listData=ArrayHelper::map($unitOfMeasure, 'id', 'type_of_measure');
        echo $form->field($model, 'unit_of_measure_id')->dropDownList(
            $listData,['prompt'=>'Select Type of Measure']);
    ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <!----?= $form->field($model, 'date_created')->textInput() ?---->

    <!----?= $form->field($model, 'date_updated')->textInput() ?---->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
