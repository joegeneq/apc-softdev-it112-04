<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ItemDescriptionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Descriptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="item-description-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Item Description', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'item_id',
            ['attribute' => 'item_id',
            'label' => 'Item Code',
            'value' => 'item.item_code',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Item::find()-> all(),'id','item_code')],
            'manufacturer',
            'remarks:ntext',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
