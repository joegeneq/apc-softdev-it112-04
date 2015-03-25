<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */

$this->title = 'Update Stock Inventory: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
