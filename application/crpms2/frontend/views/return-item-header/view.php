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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['attribute' => 'patient.lastname',
            'label' => 'Patient Last Name'],
            ['attribute' => 'patient.firstname',
            'label' => 'Patient First Name'],
            'return_item_header_code',
            
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           
            //'bed_id',
            ['attribute' => 'bed.bed_number', 'label' => 'Bed Number:'],
           
            //'item_id',
            ['attribute' => 'item.item_name', 'label' => 'Item Name:'],
           
            'quantity',
            'amount',
            'remarks:ntext',
            'created',

        ],
    ]) ?>

</div>
