<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecordItem */

$this->title = 'Create Stocks Record Item';
$this->params['breadcrumbs'][] = ['label' => 'Stocks Record Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocks-record-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
