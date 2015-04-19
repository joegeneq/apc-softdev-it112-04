<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'patient_id_no',
            'lastname',
            'firstname',
            'middlename',
            // 'address',
            // 'birthdate',
            // 'telephone_number',
            // 'cellphone_number',
            // 'email_address:email',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
