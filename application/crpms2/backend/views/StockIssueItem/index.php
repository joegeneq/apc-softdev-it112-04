<?php

use yii\helpers\Html;
use yii\grid\GridView;

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

            'id',
            'date',
            'item_name',
            'quantity',
            'expiration_date',
            // 'unit_cost',
            // 'amount',
            // 'remarks',
            // 'stock_issue_form_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
