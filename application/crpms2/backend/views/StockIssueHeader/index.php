<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueHeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">

<div class="stock-issue-header-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Issue Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'header_code',
            'date_created',
            ['attribute' => 'item_id',
            'label' => 'Category Name',
            'value' => 'item.item_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_name')],
            'quantity',
            // 'exp_date',
            // 'unit_cost',
            // 'amount',
            // 'remarks:ntext',
            ['attribute' => 'stock_issue_details_id',
            'label' => 'Stock Issue Details',
            'value' => 'stockIssueDetails.stock_issue_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockIssueDetails::find()-> all(),'id','stock_issue_code')],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
