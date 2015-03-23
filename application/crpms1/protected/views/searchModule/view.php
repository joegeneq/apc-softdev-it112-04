<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Search Module', 'url'=>array('index')),
	array('label'=>'Create Search Module', 'url'=>array('create')),
	array('label'=>'Update Search Module', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Search Module', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Search Module', 'url'=>array('admin')),
);
?>

<h1>View Search Module #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
	),
)); ?>
