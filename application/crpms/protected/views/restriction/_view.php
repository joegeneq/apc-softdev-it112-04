<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'striped bordered condensed ',
    'data'=>array(
	'restrictionCode'=>$data->restriction_code, 
	'restrictionType'=>$data->restriction_type, 
	'restrictionName'=>$data->restriction_name,
	'restrictionDescription'=>$data->restriction_description,
	
		
	),
	
    'attributes'=>array(
		array('name'=>'restrictionCode', 'label'=>'Restriction Code:'),
        array('name'=>'restrictionType', 'label'=>'Restriction Type:'),        
        array('name'=>'restrictionName', 'label'=>'Restriction Name:'),
		 array('name'=>'restrictionDescription', 'label'=>'Description:'),

	
    ),
)); ?>
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction_code')); ?>:</b>
	<?php echo CHtml::encode($data->restriction_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction_type')); ?>:</b>
	<?php echo CHtml::encode($data->restriction_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction_name')); ?>:</b>
	<?php echo CHtml::encode($data->restriction_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction_description')); ?>:</b>
	<?php echo CHtml::encode($data->restriction_description); ?>
	<br />

-->
</div>