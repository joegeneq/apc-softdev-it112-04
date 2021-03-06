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
		
		
           NavBar::begin([
                'brandLabel' => 'CRMGH-PMS',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],

                ['label' => 'User Management', 'items' => [
                    ['label' => 'Update Users', 'url' => ['/user/index'],],
                    ['label' => 'Manage Employee records', 'url' => ['/employee/index']],
                     ['label' => 'Manage Positions', 'url' => ['/position/index']],

                     ],'visible' => !Yii::$app->user->isGuest,],
              
                ['label' => 'Stock Inventory', 'items' => [
                    ['label' => 'Stock Inventory Record', 'url' => ['/stock-inventory/index']],
                    ['label' => 'Insert Item in Inventory', 'url' => ['/item/index']],
                    ['label' => 'Generic Name', 'url' => ['/generic-name/index']],
                    ['label' => 'Manufacturer', 'url' => ['/manufacturer/index']],
                    ['label' => 'Unit of Measure', 'url' => ['/unit-of-measure/index']],
                   

                     ],'visible' => !Yii::$app->user->isGuest,],
                    
                ['label' => 'Stock Issue Forms', 'items' => [

                    ['label' => 'Stock Issue Details', 'url' => ['/stock-issue-details/index']],
                    ['label' => 'Stock Issue Header', 'url' => ['/stock-issue-header/index']],

                   
                     ],'visible' => !Yii::$app->user->isGuest,],

                 ['label' => 'Return Item Forms', 'items' => [
                     ['label' => 'Create Patient Info', 'url' => ['/patient/index']],
                    ['label' => 'Return Item Details', 'url' => ['/return-item-details/index']],
                    ['label' => 'Return Item  Header', 'url' => ['/return-item-header/index']],
                     ],'visible' => !Yii::$app->user->isGuest,],


                       ['label' => 'Create New attributes', 'items' => [
                    ['label' => 'Stock Status', 'url' => ['/stock-status/index'],],
                    ['label' => 'Accounting Status', 'url' => ['/accounting-status/index']],
                    ['label' => 'Location', 'url' => ['/location/index']],
                    ['label' => 'Bed', 'url' => ['/bed/index']],
                    ['label' => 'Item Category', 'url' => ['/item-category/index']],
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
