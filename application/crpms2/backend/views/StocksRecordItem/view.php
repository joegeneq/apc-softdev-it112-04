<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
<<<<<<< HEAD

use backend\models\PurchasingStatus;


=======
use backend\models\PurchasingStatus;
>>>>>>> 8f7d8597addaa950b6e6c1d75f9c72a332a989eb
/* @var $this yii\web\View */
/* @var $model backend\models\StocksRecordItem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stocks Record Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocks-record-item-view">

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
<<<<<<< HEAD
            'id',
=======
            'stocks_record_id',
            //'id',
>>>>>>> 8f7d8597addaa950b6e6c1d75f9c72a332a989eb
            'medicine_name',
            'available_quantity',
            'released_quantity',
            'delivery_date',
            'remarks',
<<<<<<< HEAD
            
            ['attribute' => 'purchasingStatus.status', 'label' => 'Purchasing Status'],
            'stocks_record_id',
=======
            ['attribute' => 'purchasingStatus.status', 'label' => 'Purchasing Status'],
            

>>>>>>> 8f7d8597addaa950b6e6c1d75f9c72a332a989eb
        ],
    ]) ?>

</div>
