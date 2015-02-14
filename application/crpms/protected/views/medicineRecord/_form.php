<?php
/* @var $this MedicineRecordController */
/* @var $model MedicineRecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicine-record-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_name'); ?>
		<?php echo $form->textField($model,'medicine_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'medicine_name'); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'Medicine_expiration_date'); ?>
		<?php echo $form->textField($model,'Medicine_expiration_date'); ?>
		<?php echo $form->error($model,'Medicine_expiration_date'); ?>
=======
		<?php echo $form->labelEx($model,'medicine_expiration_date'); ?>
		<?php //echo $form->textField($model,'medicine_expiration_date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::activeTextField($model,'medicine_expiration_date',array("id"=>"medicine_expiration_date")); ?>
		  <?php $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'medicine_expiration_date',
        'ifFormat'=>'%Y-%m-%d',
		));
		?>
		<?php echo $form->error($model,'medicine_expiration_date'); ?>
>>>>>>> 96e29da47882c5cc515b8e09669c44ffeea4bcd7
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_price'); ?>
		<?php echo $form->textField($model,'medicine_price'); ?>
		<?php echo $form->error($model,'medicine_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_type'); ?>
		<?php echo $form->textField($model,'medicine_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'medicine_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_manufacturer'); ?>
		<?php echo $form->textField($model,'medicine_manufacturer',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'medicine_manufacturer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->