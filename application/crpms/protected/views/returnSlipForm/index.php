<?php
/* @var $this ReturnSlipFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Return Slip Forms',
);

$this->menu=array(
	array('label'=>'Create Return Slip Form', 'url'=>array('create')),
	array('label'=>'Manage Return Slip Form', 'url'=>array('admin')),
);
?>

<h1>Return Slip Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
