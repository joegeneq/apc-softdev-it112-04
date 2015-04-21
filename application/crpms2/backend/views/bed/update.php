<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bed */

$this->title = 'Update Bed: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Beds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?><body background="../web/images/background5.png">

<div class="bed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
