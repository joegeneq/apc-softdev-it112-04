<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
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
            [ 'attribute' => 'patient.lastname', 'label' => 'Patient Last Name'],
            [ 'attribute' => 'patient.firstname', 'label' => 'Patient First Name'],
             ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
            ['attribute' => 'bed.bed_number', 'label' => 'Bed Number:'],
           
             'total_amount',
           
              [ 'attribute' => 'employee.lastname', 'label' => 'Returned By:'],
             // [ 'attribute' => 'employee_firstname', 'label' => 'Received By:'],
               //[ 'attribute' => 'employee.lastname', 'label' => 'Approved By:'],
              
            //   'accounting_status_id',
           ['attribute' => 'accountingStatus.description', 'label' => 'Accounting Status:'],
         
            'date_created',
            'date_updated',
        ],
    ]) ?>

</div>
