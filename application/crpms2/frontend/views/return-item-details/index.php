<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Item Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="return-item-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'return_item_details_code',
            //'location_id',
            ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
            //'return_item_header_id',
           ['attribute' => 'return_item_header_id',
            'label' => 'Return Item Header Code',
            'value' => 'returnItemHeader.return_item_header_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\ReturnItemHeader::find()-> all(),'id','return_item_header_code')],
            //'accounting_status_id',
            ['attribute' => 'accounting_status_id',
            'label' => 'Accounting Status',
            'value' => 'accountingStatus.description',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\AccountingStatus::find()-> all(),'id','description')],
            // 'employee_id',
            // 'return_to',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
