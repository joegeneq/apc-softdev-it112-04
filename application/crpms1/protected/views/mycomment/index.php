<?php
$this->breadcrumbs=array(
	'Mycomments',
);

$this->menu=array(
	array('label'=>'Create Mycomment', 'url'=>array('create')),
	array('label'=>'Manage Mycomment', 'url'=>array('admin')),
);
?>

<h1>Mycomments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
