<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="card card-container">
    <h2 class="text-center"><?=$this->title?></h2>
    <?php $form = ActiveForm::begin([
        'id'            =>  'form-signup',
        'options'       =>  [
            'class'         =>  'form-signin',
        ]
    ])?>
    <span id="reauth-email" class="reauth-email"></span>
    <?=$form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => $model->getAttributeLabel('username')])->label(false)?>
    <?=$form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label(false)?>
    <?=$form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false)?>
    <?=Html::button('Создать аккаунт', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block btn-signin'])?>
    <?php $form->end(); ?>
    <div class="row">
        <div class="col-xs-6">
            <?=Html::a('Войти', ['site/login'], ['class' => 'forgot-password'])?>
        </div>
        <div class="col-xs-6 text-right">
            <?=Html::a('Забыли пароль?', ['site/request-password-reset'], ['class' => 'forgot-password'])?>
        </div>
    </div>
</div>