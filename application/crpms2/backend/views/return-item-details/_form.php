<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Employee;
use yii\helpers\ArrayHelper;
use backend\models\AccountingStatus;
use backend\models\Location;
use backend\models\ReturnItemHeader;
use backend\models\Item;
/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="return-item-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'return_item_details_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

<?php
        $item=Item::find()->all();
        $listData=ArrayHelper::map($item, 'id', 'item_name');
        echo $form->field($model, 'item_id')->dropDownList(
            $listData,['prompt'=>'Select Item Name']);
    ?>
    <?= $form->field($model, 'quantity')->textInput() ?>

     <?php
        $location=Location::find()->all();
        $listData=ArrayHelper::map($location, 'id', 'location_name');
        echo $form->field($model, 'location_id')->dropDownList(
            $listData,['prompt'=>'Select Location Name']);
    ?>

     <?php
        $returnItemHeader=ReturnItemHeader::find()->all();
        $listData=ArrayHelper::map($returnItemHeader, 'id', 'return_item_header_code');
        echo $form->field($model, 'return_item_header_id')->dropDownList(
            $listData,['prompt'=>'Select Return Item Header Code']);
    ?>
    <?php
        $accountingStatus=AccountingStatus::find()->all();
        $listData=ArrayHelper::map($accountingStatus, 'id', 'description');
        echo $form->field($model, 'accounting_status_id')->dropDownList(
            $listData,['prompt'=>'Select Accounting Status']);
    ?>
<?= $form->field($model, 'employee_id')->dropDownList(
        ArrayHelper::map(Employee::find()->all(), 'id', 'lastname', 'firstname'),
        ['prompt'=>'Select Employee'] ) 
    ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
