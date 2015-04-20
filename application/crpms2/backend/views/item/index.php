<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'item_code',
            'item_name',
            //'item_category_id',
            ['attribute' => 'item_category_id',
            'label' => 'Location name',
            'value' => 'itemCategory.category_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\ItemCategory::find()-> all(),'id','category_name')],
            //'manufacturer_id',
            ['attribute' => 'manufacturer_id',
            'label' => 'Manufacturer Name',
            'value' => 'manufacturer.manufacturer_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Manufacturer::find()-> all(),'id','manufacturer_name')],
            // 'generic_name_id',
            // 'minimum_reorder_quantity',
            // 'unit_of_measure_id',
            // 'remarks:ntext',
            // 'date_created',
            // 'date_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
