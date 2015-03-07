<?php
/* @var $this ReturnSlipFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Return Slip Forms',
);

$this->menu=array(
	array('label'=>'Create ReturnSlipForm', 'url'=>array('create')),
	array('label'=>'Manage ReturnSlipForm', 'url'=>array('admin')),
);
?>

<h1>Return Slip Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
