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
            'description_item:ntext',
            //'item_category_id',
			['attribute' => 'item_category_id',
            'label' => 'Category Name',
            'value' => 'itemCategory.category_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\ItemCategory::find()-> all(),'id','category_name')],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
