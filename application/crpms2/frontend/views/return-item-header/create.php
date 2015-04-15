<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ReturnItemHeader */

$this->title = 'Create Return Item Header';
$this->params['breadcrumbs'][] = ['label' => 'Return Item Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<<<<<<< HEAD
=======

<body background="../web/images/background5.png">
>>>>>>> 032824a20fad7f3a2ee2c19c4b2a87be46d5e186
<div class="return-item-header-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
