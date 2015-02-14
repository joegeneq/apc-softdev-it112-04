<?php
/* @var $this PaymentRecordController */
/* @var $model PaymentRecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payment-record-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'total_amount'); ?>
		<?php echo $form->textField($model,'total_amount'); ?>
		<?php echo $form->error($model,'total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'payment_date'); ?>
=======
		<?php echo CHtml::activeTextField($model,'payment_date',array("id"=>"payment_date")); ?>
		  <?php $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'payment_date',
        'ifFormat'=>'%Y-%m-%d',
		));
		?>
>>>>>>> 96e29da47882c5cc515b8e09669c44ffeea4bcd7
		<?php echo $form->error($model,'payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_confirmation'); ?>
		<?php echo $form->textField($model,'payment_confirmation'); ?>
		<?php echo $form->error($model,'payment_confirmation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Patient_Record_id'); ?>
		<?php echo $form->textField($model,'Patient_Record_id'); ?>
		<?php echo $form->error($model,'Patient_Record_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prescription_Record_id'); ?>
		<?php echo $form->textField($model,'Prescription_Record_id'); ?>
		<?php echo $form->error($model,'Prescription_Record_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->