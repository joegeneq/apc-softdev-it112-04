<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stock-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stock_inventory_id',
            'quantity_onhand',
            'quantity_onorder',
            'item_id',
            // 'location_id',
            // 'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
