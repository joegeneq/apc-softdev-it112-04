<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */

$this->title = $model->return_item_header_code;
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
            //'id',
            'return_item_header_code',

            'date_prepared',
           // 'patient_id',
            [ 'attribute' => 'patient.lastname', 'label' => 'Patient Last Name'],
            [ 'attribute' => 'patient.firstname', 'label' => 'Patient First Name'],
            
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
            ['attribute' => 'bed.description', 'label' => 'Bed Number:'],
           
            'total_amount',
            //'returned_by',
            //'received_by',
            //'approved_by',
             ['attribute' => 'accountingStatus.description', 'label' => 'Accounting Status:'],
           'date_created',
            'date_updated',
            //'created_by',
        ],
    ]) ?>

</div>
