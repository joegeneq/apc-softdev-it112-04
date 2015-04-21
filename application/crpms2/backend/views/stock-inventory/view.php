<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */

$this->title = $model->stock_inventory_code;
$this->params['breadcrumbs'][] = ['label' => 'Stock Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">

<div class="stock-inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
         ['attribute' => 'item.item_name', 'label' => 'Item:'],
        ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
         'quantity_onhand',
            'quantity_onorder',
            'stock_inventory_code',
            'created',
            //'created_by',
        ],
    ]) ?>

</div>
