<?php
/* @var $this PatientRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patient Records',
);

$this->menu=array(
	array('label'=>'Create PatientRecord', 'url'=>array('create')),
	array('label'=>'Manage PatientRecord', 'url'=>array('admin')),
);
?>

<h1>Patient Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
