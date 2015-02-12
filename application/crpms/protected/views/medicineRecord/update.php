<?php
/* @var $this MedicineRecordController */
/* @var $model MedicineRecord */

$this->breadcrumbs=array(
	'Medicine Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicineRecord', 'url'=>array('index')),
	array('label'=>'Create MedicineRecord', 'url'=>array('create')),
	array('label'=>'View MedicineRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MedicineRecord', 'url'=>array('admin')),
);
?>

<h1>Update MedicineRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>