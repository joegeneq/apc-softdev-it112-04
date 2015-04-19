<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueDetails */

$this->title = 'Create Stock Issue Details';
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="stock-issue-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
