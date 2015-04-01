<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="stock-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'status_code',
			
            'description_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
