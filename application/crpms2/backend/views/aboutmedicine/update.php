<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutMedicine */

$this->title = 'Update About Medicine: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'About Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-medicine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
