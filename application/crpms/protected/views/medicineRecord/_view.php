<?php
/* @var $this MedicineRecordController */
/* @var $data MedicineRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_name')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Medicine_expiration_date')); ?>:</b>
	<?php echo CHtml::encode($data->Medicine_expiration_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_price')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_type')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_manufacturer); ?>
	<br />


</div>