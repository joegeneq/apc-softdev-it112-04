<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
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
            'id',
            'patient_id',
            'return_item_header_code',
<<<<<<< HEAD
            'location_id',
            'bed_id',
=======
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
            ['attribute' => 'bed.bed_number', 'label' => 'Bed number:'],
            ['attribute' => 'item.description_item', 'label' => 'Item Name:'],
            'quantity',
>>>>>>> 7aa8ffad5541f91f6f0c01495c75cdebf0fca2be
            'amount',
            'remarks:ntext',
            'created',
        ],
    ]) ?>

</div>
