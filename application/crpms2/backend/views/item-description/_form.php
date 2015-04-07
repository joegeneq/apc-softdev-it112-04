<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Item;

/* @var $this yii\web\View */
/* @var $model backend\models\ItemDescription */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../web/images/background5.png">
<div class="item-description-form">

    <?php $form = ActiveForm::begin(); ?>

    <!----?= $form->field($model, 'item_id')->textInput() ?---->
    <?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_code');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item Code']);
		?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
