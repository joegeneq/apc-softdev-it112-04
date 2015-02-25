<?php
/* @var $this StockIssueItemController */
/* @var $model StockIssueItem */

$this->breadcrumbs=array(
	'Stock Issue Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockIssueItem', 'url'=>array('index')),
	array('label'=>'Manage StockIssueItem', 'url'=>array('admin')),
);
?>

<h1>Create StockIssueItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>