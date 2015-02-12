<?php
/* @var $this PrescriptionRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prescription Records',
);

$this->menu=array(
	array('label'=>'Create PrescriptionRecord', 'url'=>array('create')),
	array('label'=>'Manage PrescriptionRecord', 'url'=>array('admin')),
);
?>

<h1>Prescription Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
