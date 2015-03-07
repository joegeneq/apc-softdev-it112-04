<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */

$this->breadcrumbs=array(
	'Return Slip Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReturnSlipForm', 'url'=>array('index')),
	array('label'=>'Create ReturnSlipForm', 'url'=>array('create')),
	array('label'=>'View ReturnSlipForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReturnSlipForm', 'url'=>array('admin')),
);
?>

<h1>Update ReturnSlipForm <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>