<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="g-pa-20">
    <div class="row">
        <div class="col-xl-4">
        </div>
        <div class="col-xl-4">
            <div class="card g-brd-gray-light-v7 g-mb-30">
                <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                    <h3 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Login Form</h3>
                </header>
                <div class="js-custom-scroll g-height-400 g-pa-15 g-pa-0-30-25--md">
                    <section>
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <div class="input-group login-input">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'size' => 60,'class'=>'form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus rounded-0 g-px-14 g-py-10'])->label("Username") ?>
                        </div>
                        <br>
                        <div class="input-group login-input">
                            <?= $form->field($model, 'password')->passwordInput(['size' => 60,'class'=>'form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus rounded-0 g-px-14 g-py-10'])->label("Password") ?>
                        </div>
                        <div class="input-group login-input">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary pull-right', 'name' => 'login-button']) ?>
                        <?php ActiveForm::end(); ?>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
        </div>
    </div>
</div>
