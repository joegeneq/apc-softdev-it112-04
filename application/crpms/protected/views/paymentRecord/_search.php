<?php
/* @var $this PaymentRecordController */
/* @var $model PaymentRecord */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_amount'); ?>
		<?php echo $form->textField($model,'total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_date'); ?>
		<?php echo $form->textField($model,'payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_confirmation'); ?>
		<?php echo $form->textField($model,'payment_confirmation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Patient_Record_id'); ?>
		<?php echo $form->textField($model,'Patient_Record_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prescription_Record_id'); ?>
		<?php echo $form->textField($model,'Prescription_Record_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->