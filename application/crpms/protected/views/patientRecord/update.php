<?php
/* @var $this PatientRecordController */
/* @var $model PatientRecord */

$this->breadcrumbs=array(
	'Patient Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PatientRecord', 'url'=>array('index')),
	array('label'=>'Create PatientRecord', 'url'=>array('create')),
	array('label'=>'View PatientRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PatientRecord', 'url'=>array('admin')),
);
?>

<h1>Update PatientRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>