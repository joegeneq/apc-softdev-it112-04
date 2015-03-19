<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\StocksRecord;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecordItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stocks-record-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <?php // echo $form->field($model, 'id') ?>
<?php
        $StocksRecord=StocksRecord::find()->all();
        $listData=ArrayHelper::map($StocksRecord, 'id', 'id');
        echo $form->field($model, 'stocks_record_id')->dropDownList(
            $listData,['prompt'=>'Select Form']);
    ?>

    <?= $form->field($model, 'medicine_name') ?>

    <?= $form->field($model, 'available_quantity') ?>

    <?= $form->field($model, 'released_quantity') ?>

    <?php // $form->field($model, 'delivery_date') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'purchasing_status_id') ?>

    <?php // echo $form->field($model, 'stocks_record_id') ?>
    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
