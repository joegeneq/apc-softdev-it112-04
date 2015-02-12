<?php
/* @var $this PatientRecordController */
/* @var $model PatientRecord */

$this->breadcrumbs=array(
	'Patient Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PatientRecord', 'url'=>array('index')),
	array('label'=>'Manage PatientRecord', 'url'=>array('admin')),
);
?>

<h1>Create PatientRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>