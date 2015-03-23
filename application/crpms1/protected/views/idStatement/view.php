<?php
$this->breadcrumbs=array(
	'Id Statements'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List IdStatement', 'url'=>array('index')),
	array('label'=>'Create IdStatement', 'url'=>array('create')),
	array('label'=>'Update IdStatement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IdStatement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IdStatement', 'url'=>array('admin')),
);
?>

<h1>View IdStatement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_of_entry',
		'reference_code',
		'accession_number',
		'material_type',
		'title',
		'document_date',
		'record_series',
		'file',
		'item',
		
	),
)); ?>
