<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administration_account')); ?>:</b>
	<?php echo CHtml::encode($data->administration_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administration_pass')); ?>:</b>
	<?php echo CHtml::encode($data->administration_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_timein')); ?>:</b>
	<?php echo CHtml::encode($data->admin_timein); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->admin_timeout); ?>
	<br />


</div>