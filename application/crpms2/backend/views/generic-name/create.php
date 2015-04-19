<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GenericName */

$this->title = 'Create Generic Name';
$this->params['breadcrumbs'][] = ['label' => 'Generic Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">
<div class="generic-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
