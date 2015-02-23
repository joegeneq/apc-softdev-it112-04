<?php
$this->breadcrumbs=array(
	'Myaddresses',
);

$this->menu=array(
	array('label'=>'Create Myaddress', 'url'=>array('create')),
	array('label'=>'Manage Myaddress', 'url'=>array('admin')),
);
?>

<h1>Myaddresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
