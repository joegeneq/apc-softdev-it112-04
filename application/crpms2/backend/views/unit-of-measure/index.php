<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UnitOfMeasureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Of Measures';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="unit-of-measure-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unit Of Measure', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'id',
            //'type_of_measure',
            ['attribute' => 'unit_of_measure_id',
            'label' => 'Unit of Measure',
            'value' => 'unitOfMeasure.type_of_measure',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\UnitOfMeasure::find()-> all(),'id','type_of_measure')],
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>