<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'restriction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction_code'); ?>
		<?php echo $form->textField($model,'restriction_code',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'restriction_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction_type'); ?>
		<?php echo $form->textField($model,'restriction_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'restriction_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction_name'); ?>
		<?php echo $form->textField($model,'restriction_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'restriction_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction_description'); ?>
		<?php echo $form->textArea($model,'restriction_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'restriction_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->