<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Details';
$this->params['breadcrumbs'][] = $this->title;
?>
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

            'id',
            'location_id',
            'stock_inventory_id',
            'stock_issue_code',
            'stock_status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
