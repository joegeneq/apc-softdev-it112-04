<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_lastname'); ?>
		<?php echo $form->textField($model,'employee_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_firstname'); ?>
		<?php echo $form->textField($model,'employee_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_middle_initial'); ?>
		<?php echo $form->textField($model,'employee_middle_initial',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_middle_initial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_birthdate'); ?>
		<?php echo $form->textField($model,'employee_birthdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_home_address'); ?>
		<?php echo $form->textField($model,'employee_home_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_home_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_email_address'); ?>
		<?php echo $form->textField($model,'employee_email_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_contact_number'); ?>
		<?php echo $form->textField($model,'employee_contact_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_contact_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_username'); ?>
		<?php echo $form->textField($model,'employee_username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_password'); ?>
		<?php echo $form->textField($model,'employee_password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_type'); ?>
		<?php echo $form->textField($model,'employee_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search'); ?>
		<?php echo $form->textField($model,'search'); ?>
		<?php echo $form->error($model,'search'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reports'); ?>
		<?php echo $form->textField($model,'reports'); ?>
		<?php echo $form->error($model,'reports'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forms'); ?>
		<?php echo $form->textField($model,'forms'); ?>
		<?php echo $form->error($model,'forms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'system'); ?>
		<?php echo $form->textField($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rights_add'); ?>
		<?php echo $form->textField($model,'rights_add'); ?>
		<?php echo $form->error($model,'rights_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rights_edit'); ?>
		<?php echo $form->textField($model,'rights_edit'); ?>
		<?php echo $form->error($model,'rights_edit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rights_delete'); ?>
		<?php echo $form->textField($model,'rights_delete'); ?>
		<?php echo $form->error($model,'rights_delete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rights_view'); ?>
		<?php echo $form->textField($model,'rights_view'); ?>
		<?php echo $form->error($model,'rights_view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->