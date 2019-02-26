<?php

use yii\helpers\Url;
?>
<div class="sb-slidebar sb-right sb-style-overlay">
    <div class="input-group">
        <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
    </div><!-- /input-group -->

    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="<?= Url::home() ?>">Home</a></li>
        <li><?php
            if (Yii::$app->user->isGuest) {
                echo "<a href=" . Url::to(['site/login']) . ">Login</a>";
                echo "<a href=" . Url::to(['site/signup']) . ">Register</a>";
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