<?php
/* @var $this InventoryRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventory Records',
);

$this->menu=array(
	array('label'=>'Create InventoryRecord', 'url'=>array('create')),
	array('label'=>'Manage InventoryRecord', 'url'=>array('admin')),
);
?>

<h1>Inventory Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
