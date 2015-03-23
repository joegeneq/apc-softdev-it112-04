<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AboutMedicine */

$this->title = 'Create About Medicine';
$this->params['breadcrumbs'][] = ['label' => 'About Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-medicine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
