<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Employee;
/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemHeader */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="return-item-header-view">

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
          ['attribute' => 'returnItemHeader.return_item_header_code', 'label' => 'Return Item Header Code:'],
           
            'date_prepared',
            'patient_id',
			
         ['attribute' => 'location.location_name', 'label' => 'Location Name:'],
          
            'bed_id',
            'total_amount',
            'employee_id',
            ['attribute' => 'employee.lastname', 'label' => 'Employee Last name'],
            ['attribute' => 'employee.firstname', 'label' => 'Employee First name'],
           
           // 'employee_middlename',
            ['attribute' => 'accountingStatus.description', 'label' => 'Accounting Status:'],  
          
            'date_created',
            'date_updated',
        ],
    ]) ?>

</div>
