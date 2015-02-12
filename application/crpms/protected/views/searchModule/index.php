<?php
$this->breadcrumbs=array(
	'Search Modules',
);
/*
$this->menu=array(
	array('label'=>'Create SearchModule', 'url'=>array('create')),
	array('label'=>'Manage SearchModule', 'url'=>array('admin')),
); */ ?>


<h1>Search Modules</h1>
<div class="row buttons">
    <?php echo CHtml::button('Record', array('submit' => array('record/freesearch'))); ?>
	<?php echo CHtml::button('Student201', array('submit' => array('student201/freesearch'))); ?>
	<?php echo CHtml::button('Employee201', array('submit' => array('employee201/freesearch'))); ?>
	<?php echo CHtml::button('Records/Documents', array('submit' => array('recordsDocuments/freesearch'))); ?>
	
	</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
