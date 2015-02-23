<?php
$this->breadcrumbs=array(
	'Administrators'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Administrator', 'url'=>array('index')),
	array('label'=>'Create Administrator', 'url'=>array('create')),
	array('label'=>'View Administrator', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Administrator', 'url'=>array('admin')),
);
?>

<h1>Update Administrator <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>