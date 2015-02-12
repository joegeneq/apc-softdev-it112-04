<?php
/* @var $this MedicineRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicine Records',
);

$this->menu=array(
	array('label'=>'Create MedicineRecord', 'url'=>array('create')),
	array('label'=>'Manage MedicineRecord', 'url'=>array('admin')),
);
?>

<h1>Medicine Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
