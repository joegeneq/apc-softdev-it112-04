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
		<?php echo $form->label($model,'administration_account'); ?>
		<?php echo $form->textField($model,'administration_account',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'administration_pass'); ?>
		<?php echo $form->textField($model,'administration_pass',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_timein'); ?>
		<?php echo $form->textField($model,'admin_timein'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_timeout'); ?>
		<?php echo $form->textField($model,'admin_timeout'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->