<?php
$this->breadcrumbs=array(
	'Id Statements',
);

$this->menu=array(
	array('label'=>'Create IdStatement', 'url'=>array('create')),
	array('label'=>'Manage IdStatement', 'url'=>array('admin')),
);
?>

<h1>Id Statements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
