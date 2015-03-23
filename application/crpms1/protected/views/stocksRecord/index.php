<?php
/* @var $this StocksRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stocks Records',
);

$this->menu=array(
	array('label'=>'Create StocksRecord', 'url'=>array('create')),
	array('label'=>'Manage StocksRecord', 'url'=>array('admin')),
);
?>

<h1>Stocks Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
