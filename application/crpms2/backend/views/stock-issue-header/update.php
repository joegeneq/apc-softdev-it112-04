<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */

$this->title = 'Update Stock Issue Header: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-issue-header-update">
<body background="../images/background5.png">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>