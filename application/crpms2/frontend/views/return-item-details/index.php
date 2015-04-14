<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Item Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="return-item-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'item_id',
            ['attribute' => 'item_id',
            'label' => 'Item Name',
            'value' => 'item.item_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_name')],

            'quantity',

            //'location_id',
            ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],

            //'return_item_details_code',
            ['attribute' => 'return_item_header_id',
            'label' => 'Item Header Code',
            'value' => 'ReturnItemHeader.return_item_header_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\ReturnItemHeader::find()-> all(),'id','return_item_header_code')],
           
            
           // 'accounting_status_id',
             ['attribute' => 'accounting_status_id',
            'label' => 'Accounting Status',
            'value' => 'accountingStatus.description',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\AccountingStatus::find()-> all(),'id','description')],
            
            ['attribute' => 'employee_id',
                'label' => 'Employee Name',
                'value' => 'employee.lastname',
               'filter' => yii\helpers\ArrayHelper::map(backend\models\Employee::find()-> all(),'id','lastname','firstname')],
            // 'return_item_header_id',
            // 'accounting_status_id',
            // 'employee_id',
            // 'return_to',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
