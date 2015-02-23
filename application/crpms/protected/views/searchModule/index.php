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
    <?php echo CHtml::button('Medicine Record', array('submit' => array('medicineRecord/freesearch'))); ?>
	<?php echo CHtml::button('Medicine Location', array('submit' => array('medicineLocation/freesearch'))); ?>
	
	
	</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
