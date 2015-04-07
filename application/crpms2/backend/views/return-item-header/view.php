<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */

$this->title = $model->return_item_header_code;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="return-item-header-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->return_item_header_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->return_item_header_code], [
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
            'id',
            'patient.lastname',
            'patient.firstname',
            'return_item_header_code',
             ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           ['attribute' => 'bed.bed_number', 'label' => 'Bed number:'],
            ['attribute' => ' item.item_name', 'label' => 'Item Name:'],
            'quantity',
            'amount',
            'remarks:ntext',
            'created',
        ],
    ]) ?>

</div>
