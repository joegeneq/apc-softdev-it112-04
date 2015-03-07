<?php
/* @var $this StocksRecordItemController */
/* @var $model StocksRecordItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stocks-record-item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'item_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_quantity'); ?>
		<?php echo $form->textField($model,'available_quantity'); ?>
		<?php echo $form->error($model,'available_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'released_quantity'); ?>
		<?php echo $form->textField($model,'released_quantity'); ?>
		<?php echo $form->error($model,'released_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_date'); ?>
		<?php echo $form->textField($model,'delivery_date'); ?>
		<?php echo $form->error($model,'delivery_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchasing_status'); ?>
		<?php echo $form->textField($model,'purchasing_status'); ?>
		<?php echo $form->error($model,'purchasing_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stocks_record_id'); ?>
		<?php echo $form->textField($model,'stocks_record_id'); ?>
		<?php echo $form->error($model,'stocks_record_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->