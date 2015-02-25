<?php
$this->breadcrumbs=array(
	'Search Modules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Search Module', 'url'=>array('index')),
	array('label'=>'Create Search Module', 'url'=>array('create')),
	array('label'=>'View Search Module', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Search Module', 'url'=>array('admin')),
);
?>

<h1>Update Search Module <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>