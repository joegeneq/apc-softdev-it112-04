<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="stock-issue-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Issue Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
      
			['attribute' => 'stock_issue_code',
            'label' => 'Stock Issue Code',
            'value' => 'stockIssueDetails.stock_issue_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockIssueDetails::find()-> all(),'id','stock_issue_code')],
           
			
			
            'date_created',
			
           ['attribute' => 'item_id',
            'label' => 'Item name',
            'value' => 'item.item_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_name')],
         
		  
            'quantity',
            // 'exp_date',
            // 'unit_cost',
            // 'amount',
            // 'remarks:ntext',
            // 'stock_issue_header_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
