<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ItemCategory */

$this->title = 'Create Item Category';
$this->params['breadcrumbs'][] = ['label' => 'Item Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
