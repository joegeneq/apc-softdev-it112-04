<?php
/* @var $this PrescriptionRecordController */
/* @var $model PrescriptionRecord */
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
		<?php echo $form->label($model,'Prescription_quantity'); ?>
		<?php echo $form->textField($model,'Prescription_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Medicine_Record_id'); ?>
		<?php echo $form->textField($model,'Medicine_Record_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->