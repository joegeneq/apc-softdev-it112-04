<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UnitOfMeasure */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Of Measures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="unit-of-measure-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'type_of_measure',
            'description',
        ],
    ]) ?>

</div>