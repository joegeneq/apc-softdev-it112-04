<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StocksRecordItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocks Record Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stocks-record-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stocks Record Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'medicine_name',
            'available_quantity',
            'released_quantity',
            'delivery_date',
            // 'remarks',
            // 'purchasing_status_id',
            // 'stocks_record_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
