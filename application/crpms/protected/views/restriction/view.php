<?php
$this->breadcrumbs=array(
	'Restrictions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Restriction', 'url'=>array('index')),
	array('label'=>'Create Restriction', 'url'=>array('create')),
	array('label'=>'Update Restriction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Restriction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Restriction', 'url'=>array('admin')),
);
?>

<h1>View Restriction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'restriction_code',
		'restriction_type',
		'restriction_name',
		'restriction_description',
	),
)); ?>
