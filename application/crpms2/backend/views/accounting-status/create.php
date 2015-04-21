<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AccountingStatus */

$this->title = 'Create Accounting Status';
$this->params['breadcrumbs'][] = ['label' => 'Accounting Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
