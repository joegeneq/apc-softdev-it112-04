<?php
/* @var $this PaymentRecordController */
/* @var $model PaymentRecord */

$this->breadcrumbs=array(
	'Payment Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaymentRecord', 'url'=>array('index')),
	array('label'=>'Manage PaymentRecord', 'url'=>array('admin')),
);
?>

<h1>Create PaymentRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>