<?php
/* @var $this StocksRecordController */
/* @var $model StocksRecord */

$this->breadcrumbs=array(
	'Stocks Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StocksRecord', 'url'=>array('index')),
	array('label'=>'Manage StocksRecord', 'url'=>array('admin')),
);
?>

<h1>Create StocksRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>