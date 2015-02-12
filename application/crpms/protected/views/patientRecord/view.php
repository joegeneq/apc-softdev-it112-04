<?php
/* @var $this PatientRecordController */
/* @var $model PatientRecord */

$this->breadcrumbs=array(
	'Patient Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PatientRecord', 'url'=>array('index')),
	array('label'=>'Create PatientRecord', 'url'=>array('create')),
	array('label'=>'Update PatientRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PatientRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PatientRecord', 'url'=>array('admin')),
);
?>

<h1>View PatientRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patient_lastname',
		'Patient_firstname',
		'patient_middle_inital',
		'patient_contact_number',
		'Patient_address',
		'Patient_birthdatel',
	),
)); ?>
