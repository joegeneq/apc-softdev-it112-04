<?php
/* @var $this EmployeeController */
/* @var $model Employee */
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
		<?php echo $form->label($model,'employee_lastname'); ?>
		<?php echo $form->textField($model,'employee_lastname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_firstname'); ?>
		<?php echo $form->textField($model,'employee_firstname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_middle_initial'); ?>
		<?php echo $form->textField($model,'employee_middle_initial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_birthdate'); ?>
		<?php echo $form->textField($model,'employee_birthdate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_home_address'); ?>
		<?php echo $form->textField($model,'employee_home_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_email_address'); ?>
		<?php echo $form->textField($model,'employee_email_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_contact_number'); ?>
		<?php echo $form->textField($model,'employee_contact_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_username'); ?>
		<?php echo $form->textField($model,'employee_username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_type'); ?>
		<?php echo $form->textField($model,'employee_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search'); ?>
		<?php echo $form->textField($model,'search'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reports'); ?>
		<?php echo $form->textField($model,'reports'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forms'); ?>
		<?php echo $form->textField($model,'forms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'system'); ?>
		<?php echo $form->textField($model,'system'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rights_add'); ?>
		<?php echo $form->textField($model,'rights_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rights_edit'); ?>
		<?php echo $form->textField($model,'rights_edit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rights_delete'); ?>
		<?php echo $form->textField($model,'rights_delete'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rights_view'); ?>
		<?php echo $form->textField($model,'rights_view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->