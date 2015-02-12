<?php
/* @var $this MedicineRecordController */
/* @var $model MedicineRecord */

$this->breadcrumbs=array(
	'Medicine Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MedicineRecord', 'url'=>array('index')),
	array('label'=>'Create MedicineRecord', 'url'=>array('create')),
	array('label'=>'Update MedicineRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MedicineRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicineRecord', 'url'=>array('admin')),
);
?>

<h1>View MedicineRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'medicine_name',
		'Medicine_expiration_date',
		'medicine_price',
		'medicine_type',
		'medicine_manufacturer',
	),
)); ?>
