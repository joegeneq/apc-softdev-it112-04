<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'return-slip-form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_last_name'); ?>
		<?php echo $form->textField($model,'patient_last_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'patient_last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_first_name'); ?>
		<?php echo $form->textField($model,'patient_first_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'patient_first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_middle_initial'); ?>
		<?php echo $form->textField($model,'patient_middle_initial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'patient_middle_initial'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'bed_number'); ?>
		<?php echo $form->textField($model,'bed_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bed_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returned_by'); ?>
		<?php echo $form->textField($model,'returned_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'returned_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'received_by'); ?>
		<?php echo $form->textField($model,'received_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'received_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved_by'); ?>
		<?php echo $form->textField($model,'approved_by',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'approved_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accounting_status'); ?>
		<?php echo $form->textField($model,'accounting_status'); ?>
		<?php echo $form->error($model,'accounting_status'); ?>
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