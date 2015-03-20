<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItem */

$this->title = 'Create Return Item';
$this->params['breadcrumbs'][] = ['label' => 'Return Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<center><body background="../images/background5.png"></center>
<div class="return-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
