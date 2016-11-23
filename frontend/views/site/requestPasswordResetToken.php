<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Восстановить пароль';
?>
<div class="card card-container">
    <h2 class="text-center"><?=$this->title?></h2>
    <?php $form = ActiveForm::begin([
        'id'            =>  'form-signup',
        'options'       =>  [
            'class'         =>  'form-signin',
        ]
    ])?>
    <?=$form->field($model, 'email')
        ->textInput(['autofocus' => true, 'placeholder' => $model->getAttributeLabel('email')])
        ->label(false)?>
    <?=Html::button('Отправить письмо с паролем', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block btn-signin'])?>
    <?php $form->end(); ?>
    <div class="row">
        <div class="col-xs-6">
            <?=Html::a('Войти', ['site/login'], ['class' => 'forgot-password'])?>
        </div>
        <div class="col-xs-6 text-right">
            <?=Html::a('Регистрация', ['site/signup'], ['class' => 'forgot-password'])?>
        </div>
    </div>
</div>

<!--<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out your email. A link to reset password will be sent there.</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>-->
