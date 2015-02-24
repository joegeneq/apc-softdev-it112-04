<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stocks Record', 'url'=>array('index')),
	array('label'=>'Create Stocks Record', 'url'=>array('create')),
	array('label'=>'View Stocks Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stocks Record', 'url'=>array('admin')),
);
?>

<h1>Update Stocks Record <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>