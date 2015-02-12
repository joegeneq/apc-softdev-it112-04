<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>
 
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<fieldset>
	<div class="row">
	<legend>
	Information<br>
	
	</legend>
	</div>
	<div class="column">
		<?php echo $form->labelEx($model,'account_lastname'); ?>
		<?php echo $form->textField($model,'account_lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_lastname'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'account_firstname'); ?>
		<?php echo $form->textField($model,'account_firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_middle_initial'); ?>
		<?php echo $form->textField($model,'account_middle_initial',array('class'=>'span1','size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_middle_initial'); ?>
	</div>

		<div class="column">
		<?php echo $form->labelEx($model,'account_birthdate'); ?>
		<?php //echo $form->textField($model,'account_birthdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::activeTextField($model,'account_birthdate',array("id"=>"account_birthdate")); ?>
		  <?php $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'account_birthdate',
        'ifFormat'=>'%Y-%m-%d',
    ));
    ?>
		<?php echo $form->error($model,'account_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_home_address'); ?>
		<?php echo $form->textField($model,'account_home_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_home_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_email_address'); ?>
		<?php echo $form->textField($model,'account_email_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_contact_number'); ?>
		<?php echo $form->textField($model,'account_contact_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_contact_number'); ?>
	</div>

	
	<div class="column">
		<?php echo $form->labelEx($model,'account_type'); ?>
		<?php echo $form->dropDownList($model,'account_type',array('admin'=>'admin','employee'=>'employee', 
		'encoder'=>'encoder', 'guest'=>'guest', 'supervisor'=>'supervisor' )); ?> 
		<?php echo $form->error($model,'account_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>
	
	<div class="column">
		<?php echo $form->labelEx($model,'account_username'); ?>
		<?php echo $form->textField($model,'account_username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_password'); ?>
		<?php echo $form->textField($model,'account_password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'account_password'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->