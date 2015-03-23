<?php
/* @var $this ReturnItemController */
/* @var $model ReturnItem */

$this->breadcrumbs=array(
	'Return Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReturnItem', 'url'=>array('index')),
	array('label'=>'Manage ReturnItem', 'url'=>array('admin')),
);
?>

<h1>Create ReturnItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>