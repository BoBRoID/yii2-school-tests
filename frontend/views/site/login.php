<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
?>
<div class="card card-container">
    <h2 class="text-center"><?=$this->title?></h2>
    <br>
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <?php $form = ActiveForm::begin([
        'id'            =>  'login-form',
        'options'       =>  [
            'class'         =>  'form-signin',
        ]
    ])?>
    <span id="reauth-email" class="reauth-email"></span>
    <?=$form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => $model->getAttributeLabel('username')])->label(false)?>
    <?=$form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false)?>
    <?=Html::button('Войти', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block btn-signin'])?>
    <?php $form->end(); ?>
    <div class="row">
        <div class="col-xs-6">
            <?=Html::a('Регистрация', ['site/signup'], ['class' => 'forgot-password'])?>
        </div>
        <div class="col-xs-6 text-right">
            <?=Html::a('Забыли пароль?', ['site/request-password-reset'], ['class' => 'forgot-password'])?>
        </div>
    </div>
</div>