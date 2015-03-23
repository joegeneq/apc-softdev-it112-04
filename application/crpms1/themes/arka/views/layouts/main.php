<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<!-- Bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- bootstrap widget theme -->
	<link rel="stylesheet" href="css/theme.bootstrap.css">

	<!-- tablesorter plugin -->
	<script src="js/jquery.tablesorter.js"></script>
	<!-- tablesorter widget file - loaded after the plugin -->
	<script src="js/jquery.tablesorter.widgets.js"></script>

	<!-- pager plugin -->
	<link rel="stylesheet" href="css/jquery.tablesorter.pager.css">
	<script src="js/jquery.tablesorter.pager.js"></script>
	
</head>

<body>

<div class="container" id="page">

	<div id="header"> 
	<div id="Sublogo">
	
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'CRPMS (IT112)',
    'brandUrl'=>'index.php',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
              	array('visible'=>!Yii::app()->user->isGuest,'label'=>'Home','icon'=>'home white', 'url'=>array('/site/index')),
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='pharmacist' || Yii::app()->user->getState('account_type')=='accounting','label'=>'About','icon'=>'info-sign white', 'url'=>array('/department/index'),
				'items'=>array(
                    
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Company Background','icon'=>'book white', 'url'=>array('/site/page', 'view'=>'profile')),
                     array('visible'=>!Yii::app()->user->isGuest,'label'=>'Vision','icon'=>'tag white', 'url'=>array('/site/page', 'view'=>'vision')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Mission Statement','icon'=>'tags white', 'url'=>array('/site/page', 'view'=>'mission')),
					 
				)),
				
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='pharmacist','label'=>'Manage','icon'=>'cog white', 'url'=>array('/department/index'),
				'items'=>array(
                    
                     array('visible'=>!Yii::app()->user->isGuest,'label'=>'Account','icon'=>'user white', 'url'=>array('/account/index')),
					 
				)),
				
                array('visible'=>Yii::app()->user->getState('account_type')=='accountant' ,'label'=>'Records','icon'=>'book white', 'url'=>array('/department/index'),
				'items'=>array(
                    array('visible'=>!Yii::app()->user->isGuest,'label'=>'Return Slip Form','icon'=>'folder-open white', 'url'=>array('/returnSlipForm/index')),
					//array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stock Issue Form','icon'=>'file white', 'url'=>array('/stockIssueForm/index')),
					//array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stock Record','icon'=>'book white', 'url'=>array('/stocksRecord/index')),
                    
                )),
				
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='pharmacist', 'label'=>'Records','icon'=>'th-list white', 'url'=>array('/department/index'),  
				'items'=>array(
                     
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stock Record','icon'=>'book white', 'url'=>array('/stocksRecord/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stocks Record Item','icon'=>'folder-open white', 'url'=>array('/stocksRecordItem/index')),

                )),
				
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='pharmacist', 'label'=>'Forms','icon'=>'list white', 'url'=>array('/department/index'),  
				'items'=>array(
                     array('visible'=>!Yii::app()->user->isGuest,'label'=>'Return Slip Form','icon'=>'folder-open white', 'url'=>array('/returnSlipForm/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stock Issue Form','icon'=>'file white', 'url'=>array('/stockIssueForm/index')),
					 
					 )),
					 
					 
				
				array('visible'=>Yii::app()->user->getState('account_type')=='admin' || Yii::app()->user->getState('account_type')=='pharmacist', 'label'=>'Items','icon'=>'list-alt white', 'url'=>array('/department/index'),  
				'items'=>array(
                     array('visible'=>!Yii::app()->user->isGuest,'label'=>'Return Item','icon'=>'folder-open white', 'url'=>array('/returnItem/index')),
					 array('visible'=>!Yii::app()->user->isGuest,'label'=>'Stock Issue Item','icon'=>'file white', 'url'=>array('/stockIssueItem/index')),
					
					 
					 )),
				
				//array('visible'=>!Yii::app()->user->isGuest, 'label'=>'Forms','icon'=>'file white', 'url'=>array('/forms/index')),
				//array('visible'=>!Yii::app()->user->isGuest, 'label'=>'Search','icon'=>'search white', 'url'=>array('/searchModule/index')),
				

				
            ),
        ),

			 
					//'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
					
			  
		array(
            'class'=>'bootstrap.widgets.TbMenu',
			
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                
                '---',				
				
                array('label'=>'Login', 'icon'=>'user white', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('icon'=>'user white','label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),	
			/*array('visible'=>Yii::app()->user->getState('account_type')=='admin','label'=>'', 'url'=>'', 'icon'=>'plus-sign ',
                   'items'=>array(
                    array('icon'=>'info-sign white', 'label'=>'Reports', 'url'=>'http://projects2.apc.edu.ph:8080/jasperserver/', ),
				),
				
				),*/
		
			),
        ),
		
    ),
)); ?>
<?php ; ?>		
<?php ; ?>
	</div><!-- mainmenu -->

	<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); */?>
	
	
	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
)); ?>
	
	<!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> SOFTDEV_IT112 - TeamKFC.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>