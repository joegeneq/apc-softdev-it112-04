<?php
/* @var $this StockIssueFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Issue Forms',
);

$this->menu=array(
	array('label'=>'Create StockIssueForm', 'url'=>array('create')),
	array('label'=>'Manage StockIssueForm', 'url'=>array('admin')),
);
?>

<h1>Stock Issue Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
