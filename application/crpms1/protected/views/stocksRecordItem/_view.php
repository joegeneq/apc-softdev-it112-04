<?php
/* @var $this StocksRecordItemController */
/* @var $data StocksRecordItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_name')); ?>:</b>
	<?php echo CHtml::encode($data->item_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->available_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('released_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->released_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_date')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchasing_status')); ?>:</b>
	<?php echo CHtml::encode($data->purchasing_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('stocks_record_id')); ?>:</b>
	<?php echo CHtml::encode($data->stocks_record_id); ?>
	<br />

	*/ ?>

</div>