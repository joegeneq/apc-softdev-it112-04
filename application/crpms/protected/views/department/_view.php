<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'striped bordered condensed ',
    'data'=>array(
	'departmentCode'=>$data->department_code, 
	'departmentName'=>$data->department_name, 
	'departmentDescription'=>$data->department_description,
		
	),
	
    'attributes'=>array(
		array('name'=>'departmentCode', 'label'=>'Department Code:'),
        array('name'=>'departmentName', 'label'=>'Department Name:'),        
        array('name'=>'departmentDescription', 'label'=>'Description:'),
	
    ),
)); ?>
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('department_code')); ?>:</b>
	<?php echo CHtml::encode($data->department_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_name')); ?>:</b>
	<?php echo CHtml::encode($data->department_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_description')); ?>:</b>
	<?php echo CHtml::encode($data->department_description); ?>
	<br />
-->

</div>