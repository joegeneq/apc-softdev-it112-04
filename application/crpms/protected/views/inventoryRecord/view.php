<?php
/* @var $this InventoryRecordController */
/* @var $model InventoryRecord */

$this->breadcrumbs=array(
	'Inventory Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InventoryRecord', 'url'=>array('index')),
	array('label'=>'Create InventoryRecord', 'url'=>array('create')),
	array('label'=>'Update InventoryRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InventoryRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InventoryRecord', 'url'=>array('admin')),
);
?>

<h1>View InventoryRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'delivery_Date',
		'description',
		'Medicine_Record_id',
	),
)); ?>
