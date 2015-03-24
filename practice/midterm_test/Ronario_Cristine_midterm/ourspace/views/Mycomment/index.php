<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Myaddress; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\MycommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mycomments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mycomment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mycomment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            ['attribute' => 'myaddress_id',
                        'label'=> 'Myaddress ID',
                        'value'=> 'myaddress.lastname',
                        'filter' => yii\helpers\ArrayHelper::map(app\models\Myaddress::find()->all(),'id','lastname')],
            'author',
            'body:ntext',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>