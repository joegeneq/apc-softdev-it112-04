<?php
/* @var $this StockIssueItemController */
/* @var $model StockIssueItem */

$this->breadcrumbs=array(
	'Stock Issue Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StockIssueItem', 'url'=>array('index')),
	array('label'=>'Create StockIssueItem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stock-issue-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stock Issue Items</h1>

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
	'id'=>'stock-issue-item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		'item_name',
		'quantity',
		'expiration_date',
		'unit_cost',
		/*
		'amount',
		'remarks',
		'stock_issue_form_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
