<?php
$this->breadcrumbs=array(
	'Id Statements'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IdStatement', 'url'=>array('index')),
	array('label'=>'Create IdStatement', 'url'=>array('create')),
	array('label'=>'View IdStatement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IdStatement', 'url'=>array('admin')),
);
?>

<h1>Update IdStatement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>