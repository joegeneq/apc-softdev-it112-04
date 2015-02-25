<?php
$this->breadcrumbs=array(
	'Employee201'=>array('index'),
	'Manage',
);
?>
<?php 
Yii::app()->clientScript->registerScript('search', "  
$('input#keyword').keyup(function(){  $
.fn.yiiListView.update('yw0', {  
data: $(this).serialize()  
});  
return false;
});
");
?>


<h1>Search Module</h1>
<div class="row buttons">
    <?php echo CHtml::button('Record', array('submit' => array('record/freesearch'))); ?>
	<?php echo CHtml::button('Student201', array('submit' => array('student201/freesearch'))); ?>
	<b><font size=5>Employee 201</font></b>
	<?php echo CHtml::button('Records / Documents', array('submit' => array('recordsDocuments/freesearch'))); ?>
	
	</div>
	

<br>Search :<input type="text" id="keyword" name="keyword" /> <br>

<!-- search-form -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'yw0',
	'itemView'=>'_fview',
)); ?>
