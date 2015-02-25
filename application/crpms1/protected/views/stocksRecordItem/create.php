<?php
/* @var $this StocksRecordItemController */
/* @var $model StocksRecordItem */

$this->breadcrumbs=array(
	'Stocks Record Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StocksRecordItem', 'url'=>array('index')),
	array('label'=>'Manage StocksRecordItem', 'url'=>array('admin')),
);
?>

<h1>Create StocksRecordItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>