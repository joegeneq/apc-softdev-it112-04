<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Search Module', 'url'=>array('index')),
	array('label'=>'Manage Search Module', 'url'=>array('admin')),
);
?>

<h1>Create Search Module</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>