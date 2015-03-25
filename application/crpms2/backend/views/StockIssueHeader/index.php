<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueHeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
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

            'id',
            'header_code',
            'date_created',
            'item_id',
            'quantity',
            // 'exp_date',
            // 'unit_cost',
            // 'amount',
            // 'remarks:ntext',
            // 'stock_issue_details_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
