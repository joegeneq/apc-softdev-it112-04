<?php
/* @var $this PrescriptionRecordController */
/* @var $model PrescriptionRecord */

$this->breadcrumbs=array(
	'Prescription Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PrescriptionRecord', 'url'=>array('index')),
	array('label'=>'Manage PrescriptionRecord', 'url'=>array('admin')),
);
?>

<h1>Create PrescriptionRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>