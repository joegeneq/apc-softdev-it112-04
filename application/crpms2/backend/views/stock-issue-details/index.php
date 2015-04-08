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

			 ['attribute' => 'location_id',
            'label' => 'Location name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
            
			['attribute' => 'stock_inventory_id',
            'label' => 'Stock Inventory Id',
            'value' => 'stockInventory.stock_inventory_id',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockInventory::find()-> all(),'id','stock_inventory_id')],
          
            'stock_issue_code',
			
			['attribute' => 'stock_status_id',
            'label' => 'Stock Status',
            'value' => 'stockStatus.description_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StockStatus::find()-> all(),'id','description_name')],
          


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
