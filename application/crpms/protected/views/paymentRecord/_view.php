<?php
/* @var $this PaymentRecordController */
/* @var $data PaymentRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_amount')); ?>:</b>
	<?php echo CHtml::encode($data->total_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_confirmation')); ?>:</b>
	<?php echo CHtml::encode($data->payment_confirmation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_Record_id')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_Record_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prescription_Record_id')); ?>:</b>
	<?php echo CHtml::encode($data->Prescription_Record_id); ?>
	<br />


</div>