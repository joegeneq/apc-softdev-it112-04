<?php
/* @var $this StockIssueFormController */
/* @var $model StockIssueForm */

$this->breadcrumbs=array(
	'Stock Issue Forms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stock Issue Form', 'url'=>array('index')),
	array('label'=>'Create Stock Issue Form', 'url'=>array('create')),
	array('label'=>'Update Stock Issue Form', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stock Issue Form', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stock Issue Form', 'url'=>array('admin')),
);
?>

<h1>View Stock Issue Form #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'current_date',
		'date',
		'item',
		'expiration_date',
		'quantity',
		'unit_cost',
		'amount',
		'remarks',
		'prepared_by',
		'approved_by',
		'issued_by',
		'received_by',
		'ward_name',
		//'account_id',
	),
)); ?>
