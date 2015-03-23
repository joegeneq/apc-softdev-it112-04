<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrator-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'administration_account'); ?>
		<?php echo $form->textField($model,'administration_account',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'administration_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'administration_pass'); ?>
		<?php echo $form->textField($model,'administration_pass',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'administration_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_timein'); ?>
		<?php echo $form->textField($model,'admin_timein'); ?>
		<?php echo $form->error($model,'admin_timein'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_timeout'); ?>
		<?php echo $form->textField($model,'admin_timeout'); ?>
		<?php echo $form->error($model,'admin_timeout'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->