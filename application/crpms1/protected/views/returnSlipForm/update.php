<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */

$this->breadcrumbs=array(
	'Return Slip Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Return Slip Form', 'url'=>array('index')),
	array('label'=>'Create Return Slip Form', 'url'=>array('create')),
	array('label'=>'View Return Slip Form', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Return Slip Form', 'url'=>array('admin')),
);
?>

<h1>Update Return Slip Form <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>