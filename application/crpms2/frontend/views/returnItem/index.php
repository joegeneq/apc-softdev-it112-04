<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'item_name',
            'quantity',
            'amount',
            // 'remarks',
            // 'return_slip_form_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
