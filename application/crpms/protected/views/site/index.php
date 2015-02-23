<?php $this->pageTitle=Yii::app()->name; ?>

<h2><center>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i>CRUZ-RABE Maternity and General Hospital</center></h2>

<body>
<br><br><br>

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
	
		array(
		'image'=>'',  
		'label'=>'', 
		'caption'=>'',
		),
			
		array(
		'image'=>'', 
		'label'=>'', 
		'caption'=>'',
		),
		
		array(
		'image'=>'', 
		'label'=>'', 
		'caption'=>'',
		),
		
		array(
		'image'=>'', 
		'label'=>'', 
		'caption'=>'',
		),
		
		
    ),
)); ?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'',
		)

	); 
?>
 


<p>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'More Info',
    'type'=>'warning',
    'htmlOptions'=>array('data-title'=>'Admin', 'data-content'=>'Please visit the about page of our website', 'rel'=>'popover'),
		)
	); 
?>
</p>
 
<?php $this->endWidget(); ?>








</body>