<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueItem */

$this->title = 'Create Stock Issue Item';
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-issue-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
