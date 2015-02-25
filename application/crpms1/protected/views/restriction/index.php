<?php
$this->breadcrumbs=array(
	'Restrictions',
);

$this->menu=array(
	array('label'=>'Create Restriction', 'url'=>array('create')),
	array('label'=>'Manage Restriction', 'url'=>array('admin')),
);
?>

<h1>Restrictions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
