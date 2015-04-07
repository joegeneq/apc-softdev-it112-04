<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */

$this->title = 'Update Stock Inventory: ' . ' ' . $model->stock_inventory_id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Inventories', 'url' =>
['index']]; $this->params['breadcrumbs'][] = ['label' =>
$model->stock_inventory_id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update'; ?> <div class="stock-inventory-
update">
<body background="../web/images/background5.png">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
