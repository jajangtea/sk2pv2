<?php

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
?>
<!-- Wrapper for slides -->
<section class="carousel-section">
    <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">A template, infinite possibilities</h1>
                                    <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">We give you everything done, except the coffee</h2>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Built with Bootstrap</li>
                                        <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>HTML5 and CSS3</li>
                                        <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Responsive Template</li>
                                    </ul>
                                    <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <?= Html::img(Yii::getAlias('@web').'/img/demo/pre.png', ['class' => 'img-responsive animated bounceInUp animation-delay-3']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Customization extremes</h1>
                                    <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Configure your own template in few easy steps</h2>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>25 default colors</li>
                                        <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Variables less for all colors</li>
                                        <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Full width and boxed mode</li>
                                    </ul>
                                    <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <?= Html::img(Yii::getAlias('@web').'/img/demo/pre2.png', ['class' => 'img-responsive animated bounceInUp animation-delay-3']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-9">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                    <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Templates for almost everything</h1>
                                    <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Artificial Reason include over 80 HTML templates</h2>
                                    <ul class="list-unstyled carousel-list">
                                        <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>84 HTML Templates</li>
                                        <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>More than 50 components</li>
                                        <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Extra CSS classes</li>
                                    </ul>
                                    <p class="animated fadeInUpBig animation-delay-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum maxime quis tenetur dolor <span>recusandae a nulla</span> qui enim dolorem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <?= Html::img(Yii::getAlias('@web').'/img/demo/pre3.png', ['class' => 'img-responsive animated bounceInUp animation-delay-3']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->