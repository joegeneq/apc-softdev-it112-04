<?php
/* @var $this StockIssueFormController */
/* @var $model StockIssueForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-issue-form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ward_name'); ?>
		<?php echo $form->textField($model,'ward_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ward_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prepared_by'); ?>
		<?php echo $form->textField($model,'prepared_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prepared_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved_by'); ?>
		<?php echo $form->textField($model,'approved_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'approved_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issued_by'); ?>
		<?php echo $form->textField($model,'issued_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'issued_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'received_by'); ?>
		<?php echo $form->textField($model,'received_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'received_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
		<?php echo $form->error($model,'account_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->