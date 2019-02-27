<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
Pjax::begin([
    'id'=>'pjax-modal','timeout'=>false,
]);
?>
 <h1>Hello world</h1>
<div class="site-login">
   
    <div class="center-block logig-form">
        <div class="panel panel-primary">
            <div class="panel-heading">Login Form</div>
            <div class="panel-body">
                <div class="form-group">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['data-pjax' => true ],
                        ]); ?>
                    <div class="input-group login-input">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'size' => 60])->label("Username") ?>
                    </div>
                    <br>
                    <div class="input-group login-input">
                        <?= $form->field($model, 'password')->passwordInput(['size' => 60])->label("Password") ?>
                    </div>
                    <div class="input-group login-input">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-ar btn-primary pull-right', 'name' => 'login-button']) ?>
                    <a href="#" class="social-icon-ar sm twitter animated fadeInDown animation-delay-2"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon-ar sm google-plus animated fadeInDown animation-delay-3"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-icon-ar sm facebook animated fadeInDown animation-delay-4"><i class="fa fa-facebook"></i></a>
                    <hr class="dotted margin-10">
                    <a href="#" class="btn btn-ar btn-success pull-right">Create Account</a>
                    <a href="#" class="btn btn-ar btn-warning">Password Recovery</a>
                    <div class="clearfix"></div>

                    <?php ActiveForm::end(); ?>
                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
