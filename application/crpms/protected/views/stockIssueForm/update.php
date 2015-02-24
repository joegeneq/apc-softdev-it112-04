<?php
/* @var $this StockIssueFormController */
/* @var $model StockIssueForm */

$this->breadcrumbs=array(
	'Stock Issue Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stock Issue Form', 'url'=>array('index')),
	array('label'=>'Create Stock Issue Form', 'url'=>array('create')),
	array('label'=>'View Stock Issue Form', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stock Issue Form', 'url'=>array('admin')),
);
?>

<h1>Update Stock Issue Form <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>