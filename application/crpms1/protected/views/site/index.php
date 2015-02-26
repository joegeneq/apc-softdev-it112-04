<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i>CRMGH</h1>

<body>
<br><br><br>


<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
		
		/*array(
		'image'=>'images/slide3.jpg', 
		'label'=>'', 
		'caption'=>'Main Entrance',
		),*/
		
		array(
		'image'=>'images/slide4.jpg', 
		'label'=>'', 
		'caption'=>'Pharmacy Office / Medicine Cabinet',
		),
		
		array(
		'image'=>'images/slide5.jpg', 
		'label'=>'', 
		'caption'=>'Main Entrance',
		),
		
		
    ),
)); ?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'',
		)

	); 
?>
 


<p><small><strong>We are DONORS because a strong hospital is Essential to a Vibrant, Growing Community</strong><br>
<em>Cruz-Rabe Hospt. Management</em></p>

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