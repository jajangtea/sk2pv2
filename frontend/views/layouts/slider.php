<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<style type="text/css">
    .modalB{
        background: #222;
        border-top: none;
        border-bottom: solid 1px #2f2f2f;
        border-left: solid 1px #2f2f2f;
        text-decoration: none;
        padding: 12px 20px;          
        text-align: left;
        width: 300px;
    }
    .modalB:hover{
        background-color: #000000;
    }
</style>
<div class="sb-slidebar sb-right sb-style-overlay">
    <div class="input-group">
        <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
    </div><!-- /input-group -->

    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="<?= Url::home() ?>">Home</a></li>
        <li><?php
            if (Yii::$app->user->isGuest) {
                echo Html::button('Login', ['value' => Url::to(['site/login']), 'class' => 'modalB', 'id' => 'modalButton']);
                echo Html::button('Register', ['value' => Url::to(['site/signup']), 'class' => 'modalB', 'id' => 'modalButtonRegister']);
            } else {
                echo '<a data-method="post" href="site/logout">Logout</a>';
            }
            ?>
        </li>
        <li><a href="page_contact.html">Contact</a></li>
    </ul>

    <h2 class="slidebar-header">Social Media</h2>
    <div class="slidebar-social-icons">
        <a href="#" class="social-icon-ar rss"><i class="fa fa-instagram"></i></a>
        <a href="#" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="social-icon-ar wordpress"><i class="fa fa-wordpress"></i></a>
        <a href="#" class="social-icon-ar linkedin"><i class="fa fa-youtube"></i></a>
    </div>
</div> <!-- sb-slidebar sb-right -->
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>