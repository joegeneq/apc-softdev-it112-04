<?php
/* @var $this PrescriptionRecordController */
/* @var $model PrescriptionRecord */

$this->breadcrumbs=array(
	'Prescription Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PrescriptionRecord', 'url'=>array('index')),
	array('label'=>'Create PrescriptionRecord', 'url'=>array('create')),
	array('label'=>'View PrescriptionRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PrescriptionRecord', 'url'=>array('admin')),
);
?>

<h1>Update PrescriptionRecord <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>