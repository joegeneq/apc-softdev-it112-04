<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ReturnSlipForm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Slip Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-slip-form-view">

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
            'id',
            'patient_last_name',
            'patient_first_name',
            'patient_middle_initial',
            'date',
            'ward_name',
            'bed_number',
            'returned_by',
            'received_by',
            'approved_by',
            'accounting_status',
            'account_id',
        ],
    ]) ?>

</div>
