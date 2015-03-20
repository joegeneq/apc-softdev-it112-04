<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReturnSlipFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Slip Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="return-slip-form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Return Slip Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'patient_last_name',
            'patient_first_name',
            'patient_middle_initial',
            'date',
            // 'ward_id',
            // 'bed_number_id',
            // 'accounting_status_id',
            // 'returned_by',
            // 'received_by',
            // 'approved_by',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
