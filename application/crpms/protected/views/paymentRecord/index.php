<?php
/* @var $this PaymentRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payment Records',
);

$this->menu=array(
	array('label'=>'Create PaymentRecord', 'url'=>array('create')),
	array('label'=>'Manage PaymentRecord', 'url'=>array('admin')),
);
?>

<h1>Payment Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
