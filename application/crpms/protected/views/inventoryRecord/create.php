<?php
/* @var $this InventoryRecordController */
/* @var $model InventoryRecord */

$this->breadcrumbs=array(
	'Inventory Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InventoryRecord', 'url'=>array('index')),
	array('label'=>'Manage InventoryRecord', 'url'=>array('admin')),
);
?>

<h1>Create InventoryRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>