<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>


<div class="form">

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    
		)

	); 
?>
 <p><small><strong>We are DONORS because a strong hospital is Essential to a Vibrant, Growing Community</strong><br>
<em>Cruz-Rabe Hospt. Management</em></p>

<p>
<a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Login</a>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<h3>Login</h3>
		<p>Please fill out the following form with your login credentials:</p>
    </div>


<div class="modal-body">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'verticalForm',
	
	 'htmlOptions'=>array('class'=>'well'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
			),
		)	
	); 
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array('placeholder'=>'username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array('placeholder'=>'password')); ?>
		<?php echo $form->error($model,'password'); ?>
		 <p class="hint">
			
		</p> 
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="modal-footer">	

	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>   
	</div>

</div>	
 
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->
