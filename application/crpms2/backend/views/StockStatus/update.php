<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockStatus */

$this->title = 'Update Stock Status: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
