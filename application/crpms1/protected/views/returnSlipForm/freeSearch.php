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
    <?php echo CHtml::button('Stocks Record', array('submit' => array('stocksRecord/freesearch'))); ?>
	<?php echo CHtml::button('Stock Issue Form', array('submit' => array('stockIssueForm/freesearch'))); ?>
	<b><font size=5>Return Slip Form</font></b>
	
	
	</div>
	

<br>Search :<input type="text" id="keyword" name="keyword" /> <br>

<!-- search-form -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'yw0',
	'itemView'=>'_fview',
)); ?>
