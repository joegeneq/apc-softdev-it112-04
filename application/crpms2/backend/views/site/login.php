<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="../web/images/background5.png">

<div id="card">
  <h2>Log in</h2>
    <p>Please fill out the following fields to login:</p>

 
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?> <br> 
                <?= $form->field($model, 'username') ?> <br>
                <?= $form->field($model, 'password')->passwordInput() ?><br>
                <center> <?= $form->field($model, 'rememberMe')->checkbox() ?>
               <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

