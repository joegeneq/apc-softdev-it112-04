<?php
/* @var $this MedicineRecordController */
/* @var $model MedicineRecord */

$this->breadcrumbs=array(
	'Medicine Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicineRecord', 'url'=>array('index')),
	array('label'=>'Manage MedicineRecord', 'url'=>array('admin')),
);
?>

<h1>Create MedicineRecord</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>