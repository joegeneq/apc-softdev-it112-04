<?php
/* @var $this PaymentRecordController */
/* @var $model PaymentRecord */

$this->breadcrumbs=array(
	'Payment Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PaymentRecord', 'url'=>array('index')),
	array('label'=>'Create PaymentRecord', 'url'=>array('create')),
	array('label'=>'Update PaymentRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaymentRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaymentRecord', 'url'=>array('admin')),
);
?>

<h1>View PaymentRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'total_amount',
		'payment_date',
		'payment_confirmation',
		'Patient_Record_id',
		'Prescription_Record_id',
	),
)); ?>
