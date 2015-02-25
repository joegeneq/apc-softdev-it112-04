<?php
$this->breadcrumbs=array(
	'Myaddresses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Myaddress', 'url'=>array('index')),
	array('label'=>'Manage Myaddress', 'url'=>array('admin')),
);
?>

<h1>Create Myaddress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>