<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StocksRecord', 'url'=>array('index')),
	array('label'=>'Create StocksRecord', 'url'=>array('create')),
	array('label'=>'Update StocksRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StocksRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StocksRecord', 'url'=>array('admin')),
);
?>

<h1>View StocksRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'desciption',
		'account_id',
	),
)); ?>
