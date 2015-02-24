<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stocks Record', 'url'=>array('index')),
	array('label'=>'Create Stocks Record', 'url'=>array('create')),
	array('label'=>'Update Stocks Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stocks Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stocks Record', 'url'=>array('admin')),
);
?>

<h1>View Stocks Record #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_name',
		'available_quantity',
		'released_quantity',
		'delivery_date',
		'purchasing_status',
		'remarks',
		//'account_id',
	),
)); ?>
