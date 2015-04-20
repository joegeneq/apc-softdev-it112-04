<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beds';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="bed-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bed', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'bed_code',
            'bed_number',
              ['attribute' => 'location_id',
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
          

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
