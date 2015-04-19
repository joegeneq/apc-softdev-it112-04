<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Item Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="return-item-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'return_item_header_id',
            ['attribute' => 'return_item_header_id',
            'label' => 'Return Item Header Code',
            'value' => 'returnItemHeader.return_item_header_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\ReturnItemHeader::find()-> all(),'id','return_item_header_code')],
            //'item_id',
            ['attribute' =>'item_id',
            'label' => 'Item name',
            'value' => 'item.item_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_name')],
            'quantity',
            'amount',
            // 'return_to',
            // 'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
