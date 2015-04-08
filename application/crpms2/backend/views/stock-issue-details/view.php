<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="stock-issue-details-view">

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
            ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
           ['attribute' => 'stockInventory.stock_inventory_id', 'label' => 'Stock inventory id:'],
            'stock_issue_code',
<<<<<<< HEAD
            
            ['attribute' => 'stockStatus.description_name', 'label' => 'Stock Description:'],
            ['attribute' => 'employee.lastname', 'label' => 'Employee Name:'],
=======
           ['attribute' => 'stockStatus.description_name', 'label' => 'Stock issued id:'],
           ['attribute' => 'employee.lastname', 'label' => 'Employee Name:'],
>>>>>>> 8c4d066841f19a2e8a71a3b665f95507f585f650
            'issue_from',
        ],
    ]) ?>

</div>
