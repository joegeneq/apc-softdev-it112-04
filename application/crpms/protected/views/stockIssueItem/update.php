<?php
/* @var $this StockIssueItemController */
/* @var $model StockIssueItem */

$this->breadcrumbs=array(
	'Stock Issue Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockIssueItem', 'url'=>array('index')),
	array('label'=>'Create StockIssueItem', 'url'=>array('create')),
	array('label'=>'View StockIssueItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockIssueItem', 'url'=>array('admin')),
);
?>

<h1>Update StockIssueItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>