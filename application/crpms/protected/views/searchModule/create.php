<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SearchModule', 'url'=>array('index')),
	array('label'=>'Manage SearchModule', 'url'=>array('admin')),
);
?>

<h1>Create SearchModule</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>