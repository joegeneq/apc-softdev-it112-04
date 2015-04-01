<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Patient;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */

$this->title = $model->return_item_header_code;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<body background="../images/background5.png">
<div class="return-item-header-view">

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
            //'id',
            'patient.lastname',
            'patient.firstname',
            'return_item_header_code',
            
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           
            'bed_id',
            'item_id',
            'quantity',
            'amount',
            'remarks:ntext',
            'created',

        ],
    ]) ?>

</div>
