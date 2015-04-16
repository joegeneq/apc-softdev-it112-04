<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueHeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
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
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
           // 'location_id',
            ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
            //'stock_inventory_id',
            ['attribute' => 'stock_inventory_id',
            'label' => 'Stock Issue Code',
            'value' => 'stockInventory.stock_inventory_id',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockInventory::find()-> all(),'id','stock_inventory_id')],
            'header_code',
            //'stock_status_id',
            ['attribute' => 'stock_status_id',
            'label' => 'Stock Status',
            'value' => 'stockStatus.description_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockStatus::find()-> all(),'id','description_name')],
            // 'employee_id',
            // 'issue_from',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
