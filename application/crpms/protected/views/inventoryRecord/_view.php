<?php
/* @var $this InventoryRecordController */
/* @var $data InventoryRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_Date')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Medicine_Record_id')); ?>:</b>
	<?php echo CHtml::encode($data->Medicine_Record_id); ?>
	<br />


</div>