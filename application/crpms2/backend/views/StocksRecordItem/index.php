<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\StocksRecord;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StocksRecordItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocks Record Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stocks-record-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stocks Record Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id',
            'medicine_name',
            'available_quantity',
            'released_quantity',
            'delivery_date',
            // 'remarks',
            // 'purchasing_status_id',
            // 'stocks_record_id',
=======
            'stocks_record_id',
            'medicine_name',
            'available_quantity',
            'released_quantity',
            
            [
                'attribute'=>'delivery_date',
                'value'=>'delivery_date',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'delivery_date',    
                    'clientOptions' => [
                        'autoclose' => false,
                        'format' => 'yyyy-m-d',
                    ]
            ]),
            ],
            // 'remarks',
            // 'purchasing_status_id',
            // 'id',
>>>>>>> 8f7d8597addaa950b6e6c1d75f9c72a332a989eb

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
