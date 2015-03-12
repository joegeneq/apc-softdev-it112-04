<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\StocksRecord;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecordItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stocks-record-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'available_quantity')->textInput() ?>

    <?= $form->field($model, 'released_quantity')->textInput() ?>


	 <?= $form->field($model, 'delivery_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
        'inline' => false, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
]);?>

    <?= $form->field($model, 'purchasing_status')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => 45]) ?>

    
	<?php
        $StocksRecord=StocksRecord::find()->all();
        $listData=ArrayHelper::map($StocksRecord, 'id', 'description');
        echo $form->field($model, 'stocks_record_id')->dropDownList(
            $listData,['prompt'=>'Select Form']);
    ?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
