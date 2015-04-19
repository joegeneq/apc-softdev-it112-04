<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
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
            
            [ 'attribute' => 'item.item_name', 'label' => 'Item Name'],
             [ 'attribute' => 'location.location_name', 'label' => 'Location Name'],
           
            //'location_id',
            'quantity_onhand',
            'quantity_onorder',
            'stock_inventory_code',
            'created',
        ],
    ]) ?>

</div>
