<?php
/* @var $this StocksRecordItemController */
/* @var $model StocksRecordItem */

$this->breadcrumbs=array(
	'Stocks Record Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StocksRecordItem', 'url'=>array('index')),
	array('label'=>'Create StocksRecordItem', 'url'=>array('create')),
	array('label'=>'View StocksRecordItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StocksRecordItem', 'url'=>array('admin')),
);
?>

<h1>Update StocksRecordItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>