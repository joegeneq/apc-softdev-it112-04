<?php
$this->breadcrumbs=array(
	'Administrators'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Administrator', 'url'=>array('index')),
	array('label'=>'Create Administrator', 'url'=>array('create')),
	array('label'=>'Update Administrator', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Administrator', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administrator', 'url'=>array('admin')),
);
?>

<h1>View Administrator #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'administration_account',
		'administration_pass',
		'admin_timein',
		'admin_timeout',
	),
)); ?>
