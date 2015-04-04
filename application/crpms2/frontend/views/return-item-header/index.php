<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Patient;
use frontend\models\Location;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemHeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Item Headers';
$this->params['breadcrumbs'][] = $this->title;
?>

<body background="../images/background5.png">
<div class="return-item-header-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Return Item Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'patient_id',
            [
                'attribute' => 'patient_id',
                'value' => 'patient.lastname'
            ],
            'return_item_header_code',
            ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
            
            'bed_id',
             ['attribute' => 'bed_id',
            'label' => 'Bed Number',
            'value' => 'bed.bed_number',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Bed::find()-> all(),'id','bed_number')],
            
            // 'item_id',
            // 'quantity',
            // 'amount',
            // 'remarks:ntext',
            // 'created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>