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
            'stock_issue_code',
            'date_created',
              ['attribute' => 'item.item_name', 'label' => 'Item Name:'],
           
            'quantity',
            'exp_date',
            'unit_cost',
            'amount',
            'remarks:ntext',
            'stock_issue_header_id',
        ],
    ]) ?>

</div>
