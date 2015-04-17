<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */

$this->title = 'Update Return Item Header: ' . ' ' . $model->return_item_header_code;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->return_item_header_code, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<body background="../web/images/background5.png">
<div class="return-item-header-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
