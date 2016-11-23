<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Восстановление пароля';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-container">
    <h2 class="text-center"><?=$this->title?></h2>
    <?php $form = ActiveForm::begin([
        'id'            =>  'reset-password-form',
        'options'       =>  [
            'class'         =>  'form-signin',
        ]
    ])?>
    <span id="reauth-email" class="reauth-email">Введите новый пароль</span>
    <?=$form->field($model, 'password')->passwordInput(['autofocus' => 'true', 'placeholder' => $model->getAttributeLabel('password')])->label(false)?>
    <?=Html::button('Сохранить пароль', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block btn-signin'])?>
    <?php $form->end(); ?>
</div>