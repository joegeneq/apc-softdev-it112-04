<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StockIssueForm */

$this->title = 'Update Stock Issue Form: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-issue-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
