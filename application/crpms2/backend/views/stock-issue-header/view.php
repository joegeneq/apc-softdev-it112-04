<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */

$this->title = $model->header_code;
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
            //'location_id',
        'header_code',
            
            ['attribute' => 'location.location_name', 'label' => 'Location:'],
            //'stock_inventory_id',
            ['attribute' => 'stockInventory.stock_inventory_id', 'label' => 'Stock Inventory:'],
            //'stock_status_id',
            ['attribute' => 'stockStatus.description_name', 'label' => 'Stock Status:'],
            //'employee_id',
            ['attribute' => 'employee.lastname', 'label' => 'Employee Name:'],
            'issue_from',
        ],
    ]) ?>

</div>
