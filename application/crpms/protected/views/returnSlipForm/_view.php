<?php
/* @var $this ReturnSlipFormController */
/* @var $data ReturnSlipForm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->patient_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->patient_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_middle_initial')); ?>:</b>
	<?php echo CHtml::encode($data->patient_middle_initial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ward_name')); ?>:</b>
	<?php echo CHtml::encode($data->ward_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_number')); ?>:</b>
	<?php echo CHtml::encode($data->bed_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('returned_by')); ?>:</b>
	<?php echo CHtml::encode($data->returned_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('received_by')); ?>:</b>
	<?php echo CHtml::encode($data->received_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved_by')); ?>:</b>
	<?php echo CHtml::encode($data->approved_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accounting_status')); ?>:</b>
	<?php echo CHtml::encode($data->accounting_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_id')); ?>:</b>
	<?php echo CHtml::encode($data->account_id); ?>
	<br />

	*/ ?>

</div>