<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
		
		/*echo Nav::widget([
					'brandLabel' => 'CRMGH-PMS',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class'=> 'navbar-nav-inverse navbar-fixed-top',]
				'items' => [
				
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Return Slip Form', 'url' => ['/returnslipform/index']],
				['label' => 'Return Item', 'url' => ['/returnitem/index']],
				['label' => 'Stocks Record', 'url' => ['/stocksrecord/index']],
				['label' => 'Stocks Record Item', 'url' => ['/stocksrecorditem/index']],
				['label' => 'Stocks Issue Item', 'url' => ['/stockissueitem/index']],
				['label' => 'Stocks Issue Form', 'url' => ['/stockissueform/index']],
				
				];*/
           NavBar::begin([
                'brandLabel' => 'CRMGH-PMS',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'User', 'url' => ['/user/index']],
                ['label' => 'About Medicine', 'url' => ['/aboutmedicine/index']],
				//['label' => 'Home', 'url' => ['/site/index']],
				//['label' => 'Return Slip Form', 'url' => ['/returnslipform/index']],
				//['label' => 'Return Item', 'url' => ['/returnitem/index']],
				//['label' => 'Stocks Record', 'url' => ['/stocksrecord/index']],
				//['label' => 'Stocks Record Item', 'url' => ['/stocksrecorditem/index']],
				//['label' => 'Stocks Issue Item', 'url' => ['/stockissueitem/index']],
				//['label' => 'Stocks Issue Form', 'url' => ['/stockissueform/index']],
                ['label' => 'Stocks Record', 'items' => [
                    ['label' => 'Stocks Record', 'url' => ['/stocksrecord/index'],],
                    ['label' => 'Stocks Record Item', 'url' => ['/stocksrecorditem/index']],
                    ],'visible' => !Yii::$app->user->isGuest,],
				 ['label' => 'Return Slip Form', 'items' => [
                    ['label' => 'Return Slip Form', 'url' => ['/returnslipform/index']],
                    ['label' => 'Return Item', 'url' => ['/returnitem/index']],
                    ],'visible' => !Yii::$app->user->isGuest,],
                 ['label' => 'Stocks Issue Form', 'items' => [
                    ['label' => 'Stocks Issue Form', 'url' => ['/stockissueform/index']],
                    ['label' => 'Stocks Issue Item', 'url' => ['/stockissueitem/index']],
                    ],'visible' => !Yii::$app->user->isGuest,],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; SOFTDEV-IT112_<?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
