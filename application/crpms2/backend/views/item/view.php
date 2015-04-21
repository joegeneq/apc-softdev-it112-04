<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Item */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="item-view">

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
            'item_code',
            'item_name',
            //'item_category_id',
            ['attribute' => 'itemCategory.category_name', 'label' => 'Category Name:'],
            //'manufacturer_id',
            ['attribute' => 'manufacturer.manufacturer_name', 'label' => 'Manufacturer Name:'],
            //'generic_name_id',
            ['attribute' => 'genericName.generic_name', 'label' => 'Generic Name:'],
            'minimum_reorder_quantity',
            //'unit_of_measure_id',
           // ['attribute' => 'unitOfMeasure.type_of_measure', 'label' => 'Unit Of Measure:'],
            'remarks:ntext',
            //'date_created',
            //'date_updated',
        ],
    ]) ?>

</div>
