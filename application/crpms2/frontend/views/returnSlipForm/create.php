<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnSlipForm */

$this->title = 'Create Return Slip Form';
$this->params['breadcrumbs'][] = ['label' => 'Return Slip Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-slip-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
