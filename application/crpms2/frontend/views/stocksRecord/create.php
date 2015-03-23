<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\StocksRecord */

$this->title = 'Create Stocks Record';
$this->params['breadcrumbs'][] = ['label' => 'Stocks Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stocks-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
