<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */

$this->breadcrumbs=array(
	'Return Slip Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Return Slip Form', 'url'=>array('index')),
	array('label'=>'Manage Return Slip Form', 'url'=>array('admin')),
);
?>

<h1>Create Return Slip Form</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>