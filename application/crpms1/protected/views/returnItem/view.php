<?php
/* @var $this ReturnItemController */
/* @var $model ReturnItem */

$this->breadcrumbs=array(
	'Return Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReturnItem', 'url'=>array('index')),
	array('label'=>'Create ReturnItem', 'url'=>array('create')),
	array('label'=>'Update ReturnItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReturnItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReturnItem', 'url'=>array('admin')),
);
?>

<h1>View ReturnItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date',
		'item_name',
		'quantity',
		'amount',
		'remarks',
		'return_slip_form_id',
	),
)); ?>
