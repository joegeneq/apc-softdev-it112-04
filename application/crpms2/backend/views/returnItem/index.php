<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReturnItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="return-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Return Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id',
=======
            'return_slip_form_id',
>>>>>>> 0e8049b9449bab1774088fccc8163a14329809ca
            'date',
            'medicine_name',
            'quantity',
            'amount',
            // 'remarks',
<<<<<<< HEAD
            // 'return_slip_form_id',
=======
            // 'id',
>>>>>>> 0e8049b9449bab1774088fccc8163a14329809ca

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
