<?php
/* @var $this InventoryRecordController */
/* @var $model InventoryRecord */

$this->breadcrumbs=array(
	'Inventory Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InventoryRecord', 'url'=>array('index')),
	array('label'=>'Create InventoryRecord', 'url'=>array('create')),
	array('label'=>'View InventoryRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InventoryRecord', 'url'=>array('admin')),
);
?>

<h1>Update InventoryRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>