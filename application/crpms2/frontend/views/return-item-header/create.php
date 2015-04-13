<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */

$this->title = 'Create Return Item Header';
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<body background="../web/images/background5.png">
<div class="return-item-header-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
