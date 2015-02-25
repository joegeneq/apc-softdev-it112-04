<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'striped bordered condensed ',
    'data'=>array(
	'lastName'=>$data->account_lastname, 
	'firstName'=>$data->account_firstname, 
	'middleInitial'=>$data->account_middle_initial,
	'birthdate'=>$data->account_birthdate,
	'homeAddress'=>$data->account_home_address,	
	'emailAddress'=>$data->account_email_address,	
	),
	
    'attributes'=>array(
		array('name'=>'lastName', 'label'=>'Last Name:'),
        array('name'=>'firstName', 'label'=>'First Name:'),        
        array('name'=>'middleInitial', 'label'=>'Middle Initial:'),
		 array('name'=>'birthdate', 'label'=>'Birthdate:'),
        array('name'=>'homeAddress', 'label'=>'Home Address:'),
        array('name'=>'emailAddress', 'label'=>'Email Address:'),
    ),
)); ?>
<!--	
	<b><?php echo CHtml::encode($data->getAttributeLabel('account_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->account_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->account_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_middle_initial')); ?>:</b>
	<?php echo CHtml::encode($data->account_middle_initial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->account_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_home_address')); ?>:</b>
	<?php echo CHtml::encode($data->account_home_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->account_email_address); ?>
	<br />
-->
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('account_contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_username')); ?>:</b>
	<?php echo CHtml::encode($data->account_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_password')); ?>:</b>
	<?php echo CHtml::encode($data->account_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_type')); ?>:</b>
	<?php echo CHtml::encode($data->account_type); ?>
	<br />

	*/ ?>

</div>