<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="return-item-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'return_item_header_id',
             ['attribute' => 'returnItemHeader.return_item_header_code', 'label' => 'Item Header Code:'],
            //'item_id',
             ['attribute' => 'item.item_name', 'label' => 'Item Name:'],
            'quantity',
            'unit_cost',
            'amount',
            'date_created',
            //'created_by',
        ],
    ]) ?>

</div>
