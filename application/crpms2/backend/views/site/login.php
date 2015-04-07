<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">



<div id="card">
<script>    src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <h2>Log in</h2>
    <p>Please fill out the following fields to login:</p>

 
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?> <br>
                <?= $form->field($model, 'username') ?><br>
                <?= $form->field($model, 'password')->passwordInput() ?><br>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
   setInterval(function() {
$("input[type=text]").each(function() {
   var element = $(this);
   if (element.val() !== "") {
     $(this).css({
       boxShadow: 'inset 8px 0px 0  #2ecc71',
       paddingLeft: '12px'})
   }
   var element = $(this);
   if (element.val() == "") {
       $(this).css('border-left', '1px solid #ccc')
   }
});  
}, 200);
});  

</script>