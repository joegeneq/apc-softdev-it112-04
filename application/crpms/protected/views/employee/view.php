<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employee_lastname',
		'employee_firstname',
		'employee_middle_initial',
		'employee_birthdate',
		'employee_home_address',
		'employee_email_address',
		'employee_contact_number',
		'employee_username',
		'employee_password',
		'employee_type',
		'search',
		'reports',
		'forms',
		'system',
		'rights_add',
		'rights_edit',
		'rights_delete',
		'rights_view',
	),
)); ?>
