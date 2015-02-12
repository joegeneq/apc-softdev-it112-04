<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SearchModule', 'url'=>array('index')),
	array('label'=>'Create SearchModule', 'url'=>array('create')),
	array('label'=>'View SearchModule', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SearchModule', 'url'=>array('admin')),
);
?>

<h1>Update SearchModule <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>