<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */

$this->title = 'Update Return Item Details: ' . ' ' . $model->return_item_details_code;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<body background="../images/background5.png">
<div class="return-item-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
