<?php
/* @var $this PatientRecordController */
/* @var $data PatientRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->patient_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_middle_inital')); ?>:</b>
	<?php echo CHtml::encode($data->patient_middle_inital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->patient_contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_address')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Patient_birthdatel')); ?>:</b>
	<?php echo CHtml::encode($data->Patient_birthdatel); ?>
	<br />


</div>