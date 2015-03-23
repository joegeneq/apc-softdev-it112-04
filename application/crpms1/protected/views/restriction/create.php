<?php
$this->breadcrumbs=array(
	'Restrictions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Restriction', 'url'=>array('index')),
	array('label'=>'Manage Restriction', 'url'=>array('admin')),
);
?>

<h1>Create Restriction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>