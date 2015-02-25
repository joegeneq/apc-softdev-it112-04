<?php
/* @var $this StocksRecordItemController */
/* @var $model StocksRecordItem */

$this->breadcrumbs=array(
	'Stocks Record Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StocksRecordItem', 'url'=>array('index')),
	array('label'=>'Create StocksRecordItem', 'url'=>array('create')),
	array('label'=>'Update StocksRecordItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StocksRecordItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StocksRecordItem', 'url'=>array('admin')),
);
?>

<h1>View StocksRecordItem #<?php echo $model->id; ?></h1>

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
		'stocks_record_id',
	),
)); ?>
