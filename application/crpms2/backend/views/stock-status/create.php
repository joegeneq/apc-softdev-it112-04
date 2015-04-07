<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockStatus */

$this->title = 'Create Stock Status';
$this->params['breadcrumbs'][] = ['label' => 'Stock Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="stock-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
