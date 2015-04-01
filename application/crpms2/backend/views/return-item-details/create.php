<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReturnItemDetails */

$this->title = 'Create Return Item Details';
$this->params['breadcrumbs'][] = ['label' => 'Return Item Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="return-item-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
