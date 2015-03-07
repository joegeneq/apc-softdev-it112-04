<?php
/* @var $this ReturnSlipFormController */
/* @var $model ReturnSlipForm */

$this->breadcrumbs=array(
	'Return Slip Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReturnSlipForm', 'url'=>array('index')),
	array('label'=>'Manage ReturnSlipForm', 'url'=>array('admin')),
);
?>

<h1>Create ReturnSlipForm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>