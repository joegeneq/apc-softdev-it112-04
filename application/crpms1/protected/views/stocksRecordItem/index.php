<?php
/* @var $this StocksRecordItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stocks Record Items',
);

$this->menu=array(
	array('label'=>'Create StocksRecordItem', 'url'=>array('create')),
	array('label'=>'Manage StocksRecordItem', 'url'=>array('admin')),
);
?>

<h1>Stocks Record Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
