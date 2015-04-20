<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-item-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
           // 'return_item_header_id',
            ['attribute' => 'returnItemHeader.return_item_header_code', 'label' => 'Return Item Header Code:'],
           ['attribute' => 'item.item_name', 'label' => 'Item Name:'],
           
           // 'item_id',
            'quantity',
            'amount',
            'date_created',
        ],
    ]) ?>

</div>
