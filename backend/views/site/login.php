<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options="{direction: 'reverse', settings_mode_oneelement_max_offset: '150'}">
    <!-- Promo Block - Parallax Video -->
    <div class="dzsparallaxer--target" style="width: 100%; height: 130%;" data-forcewidth_ratio="1.77">
        <div class="js-bg-video g-pos-abs w-100 h-100 u-bg-overlay g-bg-size-cover g-bg-primary-gradient-opacity-v1--after" data-hs-bgv-type="vimeo" data-hs-bgv-id="167434033" data-hs-bgv-loop="1"></div>
    </div>
    <!-- End Promo Block - Parallax Video -->

    <div class="container g-pt-100 g-pb-20">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5 flex-md-unordered align-self-center g-mb-80">
                <div class="g-bg-white rounded g-pa-50">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <!-- Form -->
                    <form class="g-py-15">
                        <div class="mb-4">
                            <div class="input-group g-brd-primary--focus">
                                <div class="input-group-prepend">
                                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                                </div>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'size' => 60, 'class' => 'form-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15'])->label("Username") ?>
                                <div class="g-mb-35">
                                    <div class="input-group g-brd-primary--focus mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                                        </div>
                                        <?= $form->field($model, 'password')->passwordInput(['size' => 60, 'class' => 'orm-control g-color-black g-bg-white g-brd-gray-light-v4 g-py-15 g-px-15'])->label("Password") ?>
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col align-self-center">
                                        <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                            <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'g-hidden-xs-up g-pos-abs g-top-0 g-left-0']) ?>
                                            <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                                <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                            </div>
                                            Keep signed in
                                        </label>
                                    </div>
                                    <div class="col align-self-center text-right">
                                        <a class="g-font-size-12" href="#!">Forgot password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-md btn-block u-btn-primary g-py-13', 'name' => 'login-button']) ?>
                            </div>

                            <div class="d-flex justify-content-center text-center g-mb-30">
                                <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                                <span class="align-self-center g-color-gray-dark-v3 mx-4">OR</span>
                                <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                            </div>

                            <!-- Form Social Icons -->
                            <ul class="list-inline text-center mb-4">
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-facebook rounded-circle" href="#!">
                                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-twitter rounded-circle" href="#!">
                                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-google-plus rounded-circle" href="#!">
                                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-2">
                                    <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-linkedin rounded-circle" href="#!">
                                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Form Social Icons -->
                    </form>
                    <!-- End Form -->
                    <?php ActiveForm::end(); ?>
                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600" href="page-signup5.html">signup</a>
                        </p>
                    </footer>
                </div>
            </div>

            <div class="col-md-6 flex-md-first align-self-center g-mb-80">
                <div class="mb-5">
                    <h1 class="h3 g-color-white g-font-weight-600 mb-3">Profitable contracts,<br>invoices &amp; payments for the best cases!</h1>
                    <p class="g-color-white-opacity-0_8 g-font-size-12 text-uppercase">Trusted by 31,000+ users globally</p>
                </div>

                <div class="row">
                    <div class="col-md-11 col-lg-9">
                        <!-- Icon Blocks -->
                        <div class="media mb-4">
                            <div class="d-flex mr-4">
                                <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-white">

                                    <i class="icon-finance-168 u-line-icon-pro"></i>

                                </span>
                            </div>
                            <div class="media-body align-self-center">
                                <p class="g-color-white mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Icon Blocks -->
                        <div class="media mb-5">
                            <div class="d-flex mr-4">
                                <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-white">

                                    <i class="icon-finance-193 u-line-icon-pro"></i>

                                </span>
                            </div>
                            <div class="media-body align-self-center">
                                <p class="g-color-white mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Testimonials -->
                        <blockquote class="u-blockquote-v1 g-color-main rounded g-pl-60 g-pr-30 g-py-25 g-mb-40">Look no further you came to the right place. Unify offers everything you have dreamed of in one package.</blockquote>
                        <div class="media">
                            <img class="d-flex align-self-center rounded-circle g-width-40 g-height-40 mr-3" src="../../assets/img-temp/100x100/img12.jpg" alt="Image Description">
                            <div class="media-body align-self-center">
                                <h4 class="h6 g-color-white g-font-weight-600 g-mb-0">Alex Pottorf</h4>
                                <em class="g-color-white-opacity-0_6 g-font-style-normal g-font-size-12">Web Developer</em>
                            </div>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


