<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StocksRecord', 'url'=>array('index')),
	array('label'=>'Create StocksRecord', 'url'=>array('create')),
	array('label'=>'View StocksRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StocksRecord', 'url'=>array('admin')),
);
?>

<h1>Update StocksRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>