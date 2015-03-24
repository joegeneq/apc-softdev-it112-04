<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\StocksRecordItem;
/* @var $this yii\web\View */
/* @var $model backend\models\AboutMedicine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-medicine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => 30]) ?>

	<?php
        $stocksrecorditem=StocksRecordItem::find()->all();
        $listData=ArrayHelper::map($stocksrecorditem, 'id', 'medicine_name');
        echo $form->field($model, 'stocks_record_item_id')->dropDownList(
            $listData,['prompt'=>'Select Medicine Name']);
		?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
