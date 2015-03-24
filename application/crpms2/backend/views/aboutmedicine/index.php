<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutMedicineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Medicines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-medicine-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create About Medicine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'description:ntext',
            'manufacturer',
            'stocks_record_item_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
