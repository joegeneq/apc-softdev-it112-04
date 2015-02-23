<?php
/* @var $this StockIssueFormController */
/* @var $model StockIssueForm */

$this->breadcrumbs=array(
	'Stock Issue Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockIssueForm', 'url'=>array('index')),
	array('label'=>'Manage StockIssueForm', 'url'=>array('admin')),
);
?>

<h1>Create StockIssueForm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>