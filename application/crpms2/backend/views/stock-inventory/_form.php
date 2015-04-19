<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Location;
use backend\models\Item;
/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

     <?php
        $item=Item::find()->all();
          $listData=ArrayHelper::map($item, 'id', 'item_name');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item']);

?>
<?php
        $location=Location::find()->all();
          $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select location']);

?>
 
    <?= $form->field($model, 'quantity_onhand')->textInput() ?>

    <?= $form->field($model, 'quantity_onorder')->textInput() ?>


    <?= $form->field($model, 'stock_inventory_code')->textInput(['maxlength' => 20]) ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>