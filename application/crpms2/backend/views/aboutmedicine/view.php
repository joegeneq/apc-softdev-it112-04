<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\StocksRecordItem;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutMedicine */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'About Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="about-medicine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'stocks_record_item_id',
			//'id',
            'description:ntext',
			
            'manufacturer',
            'label' => 'Medicine Name',
            'value' => 'aboutmedicine.medicine_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\StocksRecordItem::find()-> all(),'id','medicine_name')],
        ],
    ]) ?>

</div>
