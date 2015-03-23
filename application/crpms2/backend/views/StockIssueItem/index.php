<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stock-issue-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Issue Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stock_issue_form_id',
            
             [
                'attribute'=>'date',
                'value'=>'date',
                
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'date',    
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d',
                    ]
                    ]),
                ],
            'item_name',
            'quantity',
           
            [
                'attribute'=>'expiration_date',
                'value'=>'expiration_date',
                
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'expiration_date',    
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d',
                    ]
 ]),
],
            // 'unit_cost',
            // 'amount',
            // 'remarks',
            // 'id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
