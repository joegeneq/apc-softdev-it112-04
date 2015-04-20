<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bed */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Beds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bed-view">

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
            'bed_code',
            'bed_number',
            //'location_id',
              ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
          
        ],
    ]) ?>

</div>