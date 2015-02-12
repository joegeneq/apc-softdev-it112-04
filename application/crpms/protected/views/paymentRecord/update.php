<?php
/* @var $this PaymentRecordController */
/* @var $model PaymentRecord */

$this->breadcrumbs=array(
	'Payment Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaymentRecord', 'url'=>array('index')),
	array('label'=>'Create PaymentRecord', 'url'=>array('create')),
	array('label'=>'View PaymentRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaymentRecord', 'url'=>array('admin')),
);
?>

<h1>Update PaymentRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>