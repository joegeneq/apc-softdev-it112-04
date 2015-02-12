<?php
/* @var $this PrescriptionRecordController */
/* @var $data PrescriptionRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prescription_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->Prescription_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Medicine_Record_id')); ?>:</b>
	<?php echo CHtml::encode($data->Medicine_Record_id); ?>
	<br />


</div>