<?php
/* @var $this StockIssueItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Issue Items',
);

$this->menu=array(
	array('label'=>'Create StockIssueItem', 'url'=>array('create')),
	array('label'=>'Manage StockIssueItem', 'url'=>array('admin')),
);
?>

<h1>Stock Issue Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
