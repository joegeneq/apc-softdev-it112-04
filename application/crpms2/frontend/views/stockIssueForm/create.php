<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\StockIssueForm */

$this->title = 'Create Stock Issue Form';
$this->params['breadcrumbs'][] = ['label' => 'Stock Issue Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-issue-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
