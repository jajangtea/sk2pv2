<?php

use yii\helpers\Html;
?>
<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-widget-title">Sitemap</h3>
                <ul class="list-unstyled three_cols">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="portfolio_sidebar.html">Portafolio</a></li>
                    <li><a href="portfolio_topvar.html">Works</a></li>
                    <li><a href="page_timeline_left.html">Timeline</a></li>
                    <li><a href="page_pricing.html">Pricing</a></li>
                    <li><a href="page_about2.html">About Us</a></li>
                    <li><a href="page_team.html">Our Team</a></li>
                    <li><a href="page_services.html">Services</a></li>
                    <li><a href="page_support.html">FAQ</a></li>
                    <li><a href="page_login_full.html">Login</a></li>
                    <li><a href="page_contact.html">Contact</a></li>
                </ul>
                <h3 class="footer-widget-title">Subscribe</h3>
                <p>Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Adress">
                    <span class="input-group-btn">
                        <button class="btn btn-ar btn-primary" type="button">Subscribe</button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Recent Post</h3>
                    <div class="media">
                        <a class="pull-left" href="#">
<?= Html::img('../../themes/ai/img/demo/m2.jpg', ['style' => 'width:75px;height:75']) ?>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                            <small>August 18, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">  <?= Html::img('../../themes/ai/img/demo/m11.jpg', ['style' => 'width:75px;height:75']) ?></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                            <small>September 14, 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">  <?= Html::img('../../themes/ai/img/demo/m4.jpg', ['style' => 'width:75px;height:75']) ?></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Lorem ipsum Dolor cupidatat minim adipisicing et fugiat</a></h4>
                            <small>October 9, 2013</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Recent Works</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">

                            <a href="#" class="thumbnail"> <?= Html::img('../../themes/ai/img/demo/wf1.jpg', ['class' => 'img-responsive']) ?></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"> <?= Html::img('../../themes/ai/img/demo/wf2.jpg', ['class' => 'img-responsive']) ?></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"> <?= Html::img('../../themes/ai/img/demo/wf3.jpg', ['class' => 'img-responsive']) ?></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                            <a href="#" class="thumbnail"> <?= Html::img('../../themes/ai/img/demo/wf4.jpg', ['class' => 'img-responsive']) ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</aside> <!-- footer-widgets -->
<footer id="footer">
    <p>&copy; 2014 <a href="#">Artificial Reason</a>, inc. All rights reserved.</p>
</footer>
</div> <!-- boxed -->

<div class="sb-slidebar sb-right sb-style-overlay">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- /input-group -->

    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="portfolio_topbar.html">Portfolio</a></li>
        <li><a href="page_about3.html">About us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="page_contact.html">Contact</a></li>
    </ul>

    <h2 class="slidebar-header">Social Media</h2>
    <div class="slidebar-social-icons">
        <a href="#" class="social-icon-ar rss"><i class="fa fa-rss"></i></a>
        <a href="#" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="social-icon-ar pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="social-icon-ar instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="social-icon-ar wordpress"><i class="fa fa-wordpress"></i></a>
        <a href="#" class="social-icon-ar linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="social-icon-ar flickr"><i class="fa fa-flickr"></i></a>
        <a href="#" class="social-icon-ar vine"><i class="fa fa-vine"></i></a>
        <a href="#" class="social-icon-ar dribbble"><i class="fa fa-dribbble"></i></a>
    </div>
</div> <!-- sb-slidebar sb-right -->
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>