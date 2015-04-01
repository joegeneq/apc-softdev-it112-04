<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Employee;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */

$this->title = $model->return_item_details_code;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../images/background5.png">
<div class="return-item-details-view">

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
            'return_item_details_code',
             ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           
            ['attribute' => 'returnItemHeader.return_item_header_code', 'label' => 'Return Item Header Code:'],
            ['attribute' => 'accountingStatus.description', 'label' => 'Accounting Status:'],  
            'employee.lastname',
            'employee.firstname',   
            'return_to',
            'created_at',
        ],
    ]) ?>

</div>
