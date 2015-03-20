<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StockIssueItem */

$this->title = 'Update Stock Issue Item: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-issue-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
