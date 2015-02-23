<?php
/* @var $this StockIssueFormController */
/* @var $model StockIssueForm */

$this->breadcrumbs=array(
	'Stock Issue Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockIssueForm', 'url'=>array('index')),
	array('label'=>'Create StockIssueForm', 'url'=>array('create')),
	array('label'=>'View StockIssueForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockIssueForm', 'url'=>array('admin')),
);
?>

<h1>Update StockIssueForm <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>