<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockIssueFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Issue Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-issue-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock Issue Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'ward_name',
            'prepared_by',
            'approved_by',
            // 'issued_by',
            // 'received_by',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
