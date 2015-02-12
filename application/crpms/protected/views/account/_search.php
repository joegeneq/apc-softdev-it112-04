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
		<?php echo $form->label($model,'account_lastname'); ?>
		<?php echo $form->textField($model,'account_lastname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_firstname'); ?>
		<?php echo $form->textField($model,'account_firstname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_middle_initial'); ?>
		<?php echo $form->textField($model,'account_middle_initial',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_birthdate'); ?>
		<?php echo $form->textField($model,'account_birthdate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_home_address'); ?>
		<?php echo $form->textField($model,'account_home_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_email_address'); ?>
		<?php echo $form->textField($model,'account_email_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_contact_number'); ?>
		<?php echo $form->textField($model,'account_contact_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_username'); ?>
		<?php echo $form->textField($model,'account_username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_type'); ?>
		<?php echo $form->textField($model,'account_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->