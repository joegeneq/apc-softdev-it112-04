<?php
$this->breadcrumbs=array(
	'Mycomments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mycomment', 'url'=>array('index')),
	array('label'=>'Create Mycomment', 'url'=>array('create')),
	array('label'=>'View Mycomment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mycomment', 'url'=>array('admin')),
);
?>

<h1>Update Mycomment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>