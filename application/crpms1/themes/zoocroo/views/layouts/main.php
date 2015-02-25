<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo Yii::app()->name ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#">ZooCroo</a></h1>
		<h2><?php echo Yii::app()->name ?></h2>
		<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/zoocroo.png" width="940" height="200" alt=""><!-- header image -->
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
		<div class="menu">
            <!--
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a>
			    <ul>
   					<li><a href="#">The Team</a></li>
   					<li><a href="#">History</a></li>
   					<li><a href="">Vision</a></li>
   				</ul>
  			</li>
				<li><a href="#">Products</a>
					<ul>
						<li><a href="#">Widgets</a></li>
						<li><a href="#">Wodgets</a></li>
					</ul>
				</li>
				<li><a href="#">Contact Us</a></li>
			</ul>
            -->
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); ?>

		</div>
	</nav><!-- end of top nav -->


	<section id="main"><!-- #main content and sidebar area -->
		<section id="container-zoo"><!-- #container -->
			<section id="content-zoo"><!-- #content -->
		
                <article>
                    <?php echo $content ?>
                </article>
                <!--
        		<article>
                    <h2><a href="#">Some CSS3 Transform Animation</a></h2>
                    <p>Hover over the nerds below</p>
                    <div class="moveem rotate">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/nerd1.png" alt="nerd" />
                    </div>
                    <div class="moveem slideright">
                        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/nerd.png" alt="nerd" />
                    </div>
                </article>
                -->
						
			</section><!-- end of #content -->
		</section><!-- end of #container -->

		<aside id="sidebar"><!-- sidebar -->
				<h3>Stuff</h3>
					<ul>
						<li><a href="#">About Me</a></li>
						<li><a href="#">Funny Things</a></li>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Sed Dignissim</a></li>
						<li><a href="#">Lacinia Nunc</a></li>
						<li><a href="#">Sodales Ligula</a></li>
					</ul>

				<h3>More Stuff</h3>
					<ul>
						<li><a href="#">Blah</a></li>
						<li><a href="#">More blah</a></li>
					</ul>

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->

	<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
					<aside id="first" class="footer-segment">
							<h3>Blogroll</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #first footer segment -->

					<aside id="second" class="footer-segment">
							<h3>Awesome Stuff</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #second footer segment -->

					<aside id="third" class="footer-segment">
							<h3>Coolness</h3>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
									<li><a href="#">four linkylinks</a></li>
									<li><a href="#">five linkylinks</a></li>
								</ul>
					</aside><!-- end of #third footer segment -->
					
					<aside id="fourth" class="footer-segment">
							<h3>Blahdyblah</h3>
								<p>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
					</aside><!-- end of #fourth footer segment -->

			</section><!-- end of footer-outer-block -->

		</section><!-- end of footer-area -->
	</footer>

</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
