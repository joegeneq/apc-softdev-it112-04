<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stocks Record', 'url'=>array('index')),
	array('label'=>'Manage Stocks Record', 'url'=>array('admin')),
);
?>

<h1>Create Stocks Record</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>