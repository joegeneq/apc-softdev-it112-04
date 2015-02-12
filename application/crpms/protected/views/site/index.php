<?php $this->pageTitle=Yii::app()->name; ?>


<center><h2>Welcome <i><?php echo CHtml::encode(Yii::app()->name); ?></i>CRUZ-RABE Maternity and General Hospital</h2></center>

<body>
<br><br><br>

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
    ),
)); ?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'',
		)

	); 
?>
 
<p><small><strong></strong><br>
<em></em></p>
<?php $this->endWidget(); ?>
</body>