<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\StockRecordItem;
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
			
			//'stocks_record_item_id',
			['attribute' => 'stocks_record_item_id',
            'label' => 'Medicine Name',
            'value' => 'aboutmedicine.medicine_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StocksRecordItem::find()-> all(),'id','medicine_name')],
            //'id',
            'description:ntext',
            'manufacturer',
			
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
