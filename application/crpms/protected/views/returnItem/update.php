<?php
/* @var $this ReturnItemController */
/* @var $model ReturnItem */

$this->breadcrumbs=array(
	'Return Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReturnItem', 'url'=>array('index')),
	array('label'=>'Create ReturnItem', 'url'=>array('create')),
	array('label'=>'View ReturnItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ReturnItem', 'url'=>array('admin')),
);
?>

<h1>Update ReturnItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>