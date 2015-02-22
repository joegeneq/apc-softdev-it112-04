<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\province;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\city */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'province_id' => $model->province_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'province_id' => $model->province_id], [
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
            'id',
            'city_code',
            'city_description',                                 
                [
                        'label' => 'Province',
                        'value' => $model->province->province_description,
                        ],
                        
],
                
                ])
        ?>      
        


</div>