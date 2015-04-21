<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="stock-issue-header-view">

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
            'stock_issue_header_code',
            'date_prepared',
           // 'location_id',
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           // 'stock_inventory_id',
            ['attribute' => 'stockInventory.stock_inventory_code', 'label' => 'Stock Inventory Code:'],
           // 'stock_status_id',
            ['attribute' => 'stockStatus.description_name', 'label' => 'Stock Status:'],
            //'prepared_by',
         //   ['attribute' => 'employee.prepared_by', 'label' => 'Prepared By:'],
            //'approved_by',
         //   ['attribute' => 'employee.approved_by', 'label' => 'Approved By:'],
            //'issued_by',
         //   ['attribute' => 'employee.issued_by', 'label' => 'Issued By:'],
            //'received_by',
            //['attribute' => 'employee.received_by', 'label' => 'Received By:'],
            'date_created',
            'date_updated',
           // 'created_by',
        ],
    ]) ?>

</div>
