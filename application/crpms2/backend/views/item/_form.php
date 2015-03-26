<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\ItemCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>
<body background="../images/background5.png">

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_code')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'description_item')->textarea(['rows' => 6]) ?>
	
	<?php
        $itemcategory=ItemCategory::find()->all();
        $listData=ArrayHelper::map($itemcategory, 'id', 'category_name');
        echo $form->field($model, 'item_category_id')->dropDownList(
            $listData,['prompt'=>'Select Category Name']);
		?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
