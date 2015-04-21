<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
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

           // 'id',
              ['attribute' => 'item_id',
            'label' => 'Item Name',
            'value' => 'item.item_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_name')],
              ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
            
            //'location_id',
            'quantity_onhand',
            'quantity_onorder',
            // 'stock_inventory_code',
            // 'created',
            // 'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
