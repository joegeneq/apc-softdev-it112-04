<?php
$this->breadcrumbs=array(
	'Restrictions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Restriction', 'url'=>array('index')),
	array('label'=>'Create Restriction', 'url'=>array('create')),
	array('label'=>'View Restriction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Restriction', 'url'=>array('admin')),
);
?>

<h1>Update Restriction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>