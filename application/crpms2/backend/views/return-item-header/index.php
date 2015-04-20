<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReturnItemHeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Return Item Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-item-header-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Return Item Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            //'id',
            'return_item_header_code',
           // 'date_prepared',
            //'patient_id',
            [
=======
           // 'id',
            'return_item_header_code',
            //'date_prepared',
            //'patient_id',
			   [
>>>>>>> 90376e3a78db5f7dcc0e1ee60c74df2b79881389
                'attribute' => 'patient_id',
                'label' => 'Patient Lastname',
                'value' => 'patient.lastname'
            ],
<<<<<<< HEAD
           // 'location_id',
              ['attribute' => 'location_id',
=======
			
            'location_id',
			      ['attribute' => 'location_id',
>>>>>>> 90376e3a78db5f7dcc0e1ee60c74df2b79881389
            'label' => 'Location Name',
            'value' => 'location.location_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Location::find()-> all(),'id','location_name')],
          
<<<<<<< HEAD
=======
			
>>>>>>> 90376e3a78db5f7dcc0e1ee60c74df2b79881389
            // 'bed_id',
            // 'total_amount',
            // 'employee_id',
            // 'employee_lastname',
            // 'employee_firstname',
<<<<<<< HEAD
           // 'accounting_status_id',
             ['attribute' => 'accounting_status_id',
            'label' => 'Accounting Status',
            'value' => 'accountingStatus.description',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\AccountingStatus::find()-> all(),'id','description')],
          
=======
            // 'accounting_status_id',
			   ['attribute' => 'accounting_status_id',
            'label' => 'Accounting Status',
            'value' => 'accountingStatus.description',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\AccountingStatus::find()-> all(),'id','description')],

>>>>>>> 90376e3a78db5f7dcc0e1ee60c74df2b79881389
            // 'date_created',
            // 'date_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
