<?php
$this->breadcrumbs=array(
	'Id Statements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IdStatement', 'url'=>array('index')),
	array('label'=>'Manage IdStatement', 'url'=>array('admin')),
);
?>

<h1>Create IdStatement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>