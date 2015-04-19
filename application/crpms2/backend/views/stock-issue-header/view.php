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
            //'location_id',
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
            //'stock_inventory_id',
            ['attribute' => 'stockInventory.stock_inventory_code', 'label' => 'Stock Inventory Code:'],
            //'stock_status_id',
            ['attribute' => 'stockStatus.description_name', 'label' => 'Stock Status:'],
            //'employee_id',
            ['attribute' => 'employee.emp_code', 'label' => 'Employee Code:'],
            //'employee_lastname',
            ['attribute' => 'employee.lastname', 'label' => 'Employee Lastname:'],
            //'employee_firstname',
            ['attribute' => 'employee.firstname', 'label' => 'Employee Firstname:'],
            //'employee_middlename',
            ['attribute' => 'employee.middlename', 'label' => 'Employee Middlename:'],
            'date_created',
            'date_updated',
        ],
    ]) ?>

</div>
