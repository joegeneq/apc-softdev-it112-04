<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */

$this->breadcrumbs=array(
	'Return Slip Forms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Return Slip Form', 'url'=>array('index')),
	array('label'=>'Create Return Slip Form', 'url'=>array('create')),
	array('label'=>'Update Return Slip Form', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Return Slip Form', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Return Slip Form', 'url'=>array('admin')),
);
?>

<h1>View ReturnSlipForm #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patient_last_name',
		'patient_first_name',
		'patient_middle_initial',
		'date',
		'ward_name',
		'bed_number',
		'returned_by',
		'received_by',
		'approved_by',
		'accounting_status',
		//'account_id',
	),
)); ?>
