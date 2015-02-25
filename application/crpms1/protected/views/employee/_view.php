<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->employee_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_middle_initial')); ?>:</b>
	<?php echo CHtml::encode($data->employee_middle_initial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->employee_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_home_address')); ?>:</b>
	<?php echo CHtml::encode($data->employee_home_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->employee_email_address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->employee_contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_username')); ?>:</b>
	<?php echo CHtml::encode($data->employee_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_password')); ?>:</b>
	<?php echo CHtml::encode($data->employee_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_type')); ?>:</b>
	<?php echo CHtml::encode($data->employee_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search')); ?>:</b>
	<?php echo CHtml::encode($data->search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reports')); ?>:</b>
	<?php echo CHtml::encode($data->reports); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forms')); ?>:</b>
	<?php echo CHtml::encode($data->forms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('system')); ?>:</b>
	<?php echo CHtml::encode($data->system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rights_add')); ?>:</b>
	<?php echo CHtml::encode($data->rights_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rights_edit')); ?>:</b>
	<?php echo CHtml::encode($data->rights_edit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rights_delete')); ?>:</b>
	<?php echo CHtml::encode($data->rights_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rights_view')); ?>:</b>
	<?php echo CHtml::encode($data->rights_view); ?>
	<br />

	*/ ?>

</div>