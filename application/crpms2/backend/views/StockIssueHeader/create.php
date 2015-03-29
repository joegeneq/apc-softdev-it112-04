<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockIssueHeader */

$this->title = 'Create Stock Issue Header';
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-issue-header-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
