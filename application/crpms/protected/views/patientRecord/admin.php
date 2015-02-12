<?php
/* @var $this PatientRecordController */
/* @var $model PatientRecord */

$this->breadcrumbs=array(
	'Patient Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PatientRecord', 'url'=>array('index')),
	array('label'=>'Create PatientRecord', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#patient-record-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Patient Records</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patient-record-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'patient_lastname',
		'Patient_firstname',
		'patient_middle_inital',
		'patient_contact_number',
		'Patient_address',
		/*
		'Patient_birthdatel',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
