<?php
/* @var $this ReturnItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Return Items',
);

$this->menu=array(
	array('label'=>'Create ReturnItem', 'url'=>array('create')),
	array('label'=>'Manage ReturnItem', 'url'=>array('admin')),
);
?>

<h1>Return Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
