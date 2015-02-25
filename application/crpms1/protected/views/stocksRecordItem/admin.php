<?php
/* @var $this StocksRecordItemController */
/* @var $model StocksRecordItem */

$this->breadcrumbs=array(
	'Stocks Record Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StocksRecordItem', 'url'=>array('index')),
	array('label'=>'Create StocksRecordItem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stocks-record-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stocks Record Items</h1>

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
	'id'=>'stocks-record-item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item_name',
		'available_quantity',
		'released_quantity',
		'delivery_date',
		'purchasing_status',
		/*
		'remarks',
		'stocks_record_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
