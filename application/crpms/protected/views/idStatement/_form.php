<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'id-statement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_entry'); ?>
		<?php echo $form->textField($model,'date_of_entry'); ?>
		<?php echo $form->error($model,'date_of_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_code'); ?>
		<?php echo $form->textField($model,'reference_code',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'reference_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_code'); ?>
		<?php echo $form->textField($model,'location_code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'location_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shelf_number'); ?>
		<?php echo $form->textField($model,'shelf_number',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'shelf_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bay_number'); ?>
		<?php echo $form->textField($model,'bay_number',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'bay_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'box_number'); ?>
		<?php echo $form->textField($model,'box_number',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'box_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folder_number'); ?>
		<?php echo $form->textField($model,'folder_number',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'folder_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accession_number'); ?>
		<?php echo $form->textField($model,'accession_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'accession_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_type'); ?>
		<?php echo $form->textField($model,'material_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'material_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_date'); ?>
		<?php echo $form->textField($model,'document_date',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'document_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fonds'); ?>
		<?php echo $form->textField($model,'fonds',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fonds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_fonds'); ?>
		<?php echo $form->textField($model,'sub_fonds',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sub_fonds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_sub_fonds'); ?>
		<?php echo $form->textField($model,'sub_sub_fonds',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sub_sub_fonds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record_series'); ?>
		<?php echo $form->textField($model,'record_series',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'record_series'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_series'); ?>
		<?php echo $form->textField($model,'sub_series',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sub_series'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model,'item',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record_medium'); ?>
		<?php echo $form->textField($model,'record_medium',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'record_medium'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->