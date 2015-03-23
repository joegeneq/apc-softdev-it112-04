<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecord */

$this->title = 'Update Stocks Record: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stocks Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stocks-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
