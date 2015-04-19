<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GenericName */

$this->title = 'Update Generic Name: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Generic Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<body background="../web/images/background5.png">
<div class="generic-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
