<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"></div>
		<br><br>
	</div><!-- header -->
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'CRPMS',
    'brandUrl'=>'',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
              	array('visible'=>!Yii::app()->user->isGuest,'label'=>'Home','icon'=>'home white', 'url'=>array('/site/index')),
				array('visible'=>!Yii::app()->user->isGuest,'label'=>'About','icon'=>'briefcase white', 'url'=>array('/site/page', 'view'=>'about')),
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='encoder' || Yii::app()->user->getState('account_type')=='supervisor' ,'label'=>'Manage','icon'=>'cog white', 'url'=>array('/department/index'),
				'items'=>array(
                    
                   array('visible'=>!Yii::app()->user->isGuest,'label'=>'Account','icon'=>'user', 'url'=>array('/account/index')),
					array('label'=>'______________________'),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Medicine Record','icon'=>'folder-open', 'url'=>array('/medicineRecord/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Patient Record','icon'=>'file', 'url'=>array('/patientRecord/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Prescription Record','icon'=>'book', 'url'=>array('/prescriptionRecord/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Inventory Record','icon'=>'th-list', 'url'=>array('/inventoryRecord/index')),
				     array('visible'=>!Yii::app()->user->isGuest,'label'=>'Medicine Location','icon'=>'list', 'url'=>array('/medicineLocation/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Payment Record','icon'=>'file', 'url'=>array('/paymentRecord/index')),
               
                )),
				
				//array('visible'=>!Yii::app()->user->isGuest, 'label'=>'Downloads','icon'=>'file white', 'url'=>array('/forms/index')),
				
            ),
        ),
       


                   	   //'<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
      
	  
	  array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
				'---',
                array('label'=>'', 'items'=>array(
                array('label'=>'Login', 'icon'=>'user white', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)	
                   
                )),
            ),
        ),
		
    ),
)); ?>
	
	<div id="mainmenu">
          	
	       <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Modules', 'url'=>array('/site/page', 'view'=>'modules')),
				//array('label'=>'User', 'url'=>array('/site/page', 'view'=>'user'))
			
			),
		)); 
		?>
			
	</div><!-- mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> SOFTDEV_IT112 - Team KFC<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>