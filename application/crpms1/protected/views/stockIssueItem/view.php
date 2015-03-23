<?php
/* @var $this StockIssueItemController */
/* @var $model StockIssueItem */

$this->breadcrumbs=array(
	'Stock Issue Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockIssueItem', 'url'=>array('index')),
	array('label'=>'Create StockIssueItem', 'url'=>array('create')),
	array('label'=>'Update StockIssueItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockIssueItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockIssueItem', 'url'=>array('admin')),
);
?>

<h1>View StockIssueItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'item_name',
		'quantity',
		'expiration_date',
		'unit_cost',
		'amount',
		'remarks',
		'stock_issue_form_id',
	),
)); ?>
