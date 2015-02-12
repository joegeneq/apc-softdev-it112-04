<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SearchModule', 'url'=>array('index')),
	array('label'=>'Create SearchModule', 'url'=>array('create')),
	array('label'=>'Update SearchModule', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SearchModule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SearchModule', 'url'=>array('admin')),
);
?>

<h1>View SearchModule #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
	),
)); ?>
