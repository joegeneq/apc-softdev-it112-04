<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'emp_code',
            'firstname',
            'lastname',
            'middlename',
            // 'address',
            // 'contact_number',
           // 'position_id',
            ['attribute' => 'position_id',
            'label' => 'Position Name',
            'value' => 'position.position_name',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\Position::find()-> all(),'id','position_name')],
            
           // 'user_id',
            ['attribute' => 'user_id',
            'label' => 'Created By',
            'value' => 'user.username',
            'filter' => yii\helpers\ArrayHelper::map(backend\models\User::find()-> all(),'id','username')],

            ['class' => 'yii\grid\ActionColumn'],

            
        ],
    ]); ?>

</div>
