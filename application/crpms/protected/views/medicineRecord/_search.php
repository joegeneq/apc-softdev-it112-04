<?php
/* @var $this MedicineRecordController */
/* @var $model MedicineRecord */
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
		<?php echo $form->label($model,'medicine_name'); ?>
		<?php echo $form->textField($model,'medicine_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Medicine_expiration_date'); ?>
		<?php echo $form->textField($model,'Medicine_expiration_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicine_price'); ?>
		<?php echo $form->textField($model,'medicine_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicine_type'); ?>
		<?php echo $form->textField($model,'medicine_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicine_manufacturer'); ?>
		<?php echo $form->textField($model,'medicine_manufacturer',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->