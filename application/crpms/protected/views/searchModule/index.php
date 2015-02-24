<?php
$this->breadcrumbs=array(
	'Search Modules',
);
/*
$this->menu=array(
	array('label'=>'Create Search Module', 'url'=>array('create')),
	array('label'=>'Manage Search Module', 'url'=>array('admin')),
); */ ?>


<h1>Search Modules</h1>
<div class="row buttons">
    <?php echo CHtml::button('Stocks Record', array('submit' => array('stocksRecord/freesearch'))); ?>
	<?php echo CHtml::button('Return Slip Form', array('submit' => array('returnSlipForm/freesearch'))); ?>
	<?php echo CHtml::button('Stock Issue Form', array('submit' => array('stockIssueForm/freesearch'))); ?>
	
	
	</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
