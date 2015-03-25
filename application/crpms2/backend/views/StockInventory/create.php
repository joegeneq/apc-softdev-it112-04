<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StockInventory */

$this->title = 'Create Stock Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Stock Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-inventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>