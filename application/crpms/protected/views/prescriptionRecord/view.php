<?php
/* @var $this PrescriptionRecordController */
/* @var $model PrescriptionRecord */

$this->breadcrumbs=array(
	'Prescription Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PrescriptionRecord', 'url'=>array('index')),
	array('label'=>'Create PrescriptionRecord', 'url'=>array('create')),
	array('label'=>'Update PrescriptionRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PrescriptionRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PrescriptionRecord', 'url'=>array('admin')),
);
?>

<h1>View PrescriptionRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Prescription_quantity',
		'Medicine_Record_id',
	),
)); ?>
