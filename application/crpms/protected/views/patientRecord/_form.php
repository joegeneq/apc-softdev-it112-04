<?php
/* @var $this PatientRecordController */
/* @var $model PatientRecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-record-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_lastname'); ?>
		<?php echo $form->textField($model,'patient_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'patient_lastname'); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'Patient_firstname'); ?>
		<?php echo $form->textField($model,'Patient_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Patient_firstname'); ?>
=======
		<?php echo $form->labelEx($model,'patient_firstname'); ?>
		<?php echo $form->textField($model,'patient_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'patient_firstname'); ?>
>>>>>>> 96e29da47882c5cc515b8e09669c44ffeea4bcd7
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_middle_inital'); ?>
		<?php echo $form->textField($model,'patient_middle_inital',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'patient_middle_inital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_contact_number'); ?>
		<?php echo $form->textField($model,'patient_contact_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'patient_contact_number'); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->labelEx($model,'Patient_address'); ?>
		<?php echo $form->textField($model,'Patient_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Patient_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Patient_birthdatel'); ?>
		<?php echo $form->textField($model,'Patient_birthdatel'); ?>
		<?php echo $form->error($model,'Patient_birthdatel'); ?>
=======
		<?php echo $form->labelEx($model,'patient_address'); ?>
		<?php echo $form->textField($model,'patient_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'patient_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_birthdate'); ?>
		<?php echo CHtml::activeTextField($model,'patient_birthdate',array("id"=>"patient_birthdate")); ?>
		  <?php $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'patient_birthdate',
        'ifFormat'=>'%Y-%m-%d',
		));
		?>
		<?php echo $form->error($model,'patient_birthdate'); ?>
>>>>>>> 96e29da47882c5cc515b8e09669c44ffeea4bcd7
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->