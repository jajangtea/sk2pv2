<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="boxed">
            <nav class="navbar navbar-default yamm navbar-static-top" role="navigation" id="header">
                <?php
                NavBar::begin([
                    'brandLabel' => 'SKKP <span>STT INDONESIA</span>',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'collapse navbar-collapse',
                    ],
                ]);
               
                if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                } else {
                    $menuItems[] = '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>

            </nav>

            <header class="main-header">
                <div class="container">
                    <h1 class="page-title"><?= Html::encode($this->title) ?></h1>
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>

                </div>
            </header>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="sidebar-nav animated fadeIn">
                            <li>
                                <a data-toggle="collapse" href="#coll-css" class="collapsed"><i class="fa fa-css3"></i> CSS</a>
                                <ul id="coll-css" class="menu-submenu list-unstyled collapse">
                                    <li><a href="css_typography.html"><i class="fa fa-font"></i> Typography</a></li>
                                    <li><a href="css_headers.html"><i class="fa fa-header"></i> Headers</a></li>
                                    <li><a href="css_dividers.html"><i class="fa fa-arrows-h"></i> Dividers</a></li>
                                    <li><a href="css_blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                                    <li><a href="css_forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                                    <li><a href="css_tables.html"><i class="fa fa-table"></i> Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#coll-btn" class="collapsed"><i class="fa fa-hand-o-up"></i> Buttons</a>
                                <ul id="coll-btn" class="menu-submenu list-unstyled collapse">
                                    <li><a href="btn_basic_buttons.html"><i class="fa fa-arrow-circle-right"></i> Basic Buttons</a></li>
                                    <li><a href="btn_library_buttons.html"><i class="fa fa-arrow-circle-right"></i> Buttons Library</a></li>
                                    <li><a href="btn_social_buttons.html"><i class="fa fa-arrow-circle-right"></i> Social Buttons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#coll-icons" class="collapsed"><i class="fa fa-briefcase"></i> Icons</a>
                                <ul id="coll-icons" class="menu-submenu list-unstyled collapse">
                                    <li><a href="icons_artificial_reason.html"><i class="fa fa-font"></i> Artificial Reason Icons</a></li>
                                    <li><a href="icons_glyph.html"><i class="fa fa-arrow-circle-right"></i> Glyphicons Icons</a></li>
                                    <li><a href="icons_awesome.html"><i class="fa fa-flag"></i> Font Awesome</a></li>
                                    <li><a href="icons_social.html"><i class="fa fa-twitter"></i> Social Icons</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a data-toggle="collapse" href="#coll-comp"><i class="fa fa-list-alt"></i> Components</a>
                                <ul id="coll-comp" class="menu-submenu list-unstyled collapse in">
                                    <li><a href="components_dropdowns.html"><i class="fa fa-arrow-circle-right"></i> Components Dropdowns</a></li>
                                    <li><a href="components_panels.html"><i class="fa fa-arrow-circle-right"></i> Panels</a></li>
                                    <li><a href="components_lists.html"><i class="fa fa-arrow-circle-right"></i> Lists</a></li>
                                    <li><a href="components_paginations.html"><i class="fa fa-arrow-circle-right"></i> Paginations</a></li>
                                    <li><a href="components_labels_badges.html"><i class="fa fa-arrow-circle-right"></i> Labels and Badges</a></li>
                                    <li><a href="components_alerts_wells.html"><i class="fa fa-arrow-circle-right"></i> Alerts and Wells</a></li>
                                    <li><a href="components_thumbnails.html"><i class="fa fa-arrow-circle-right"></i> Thumbnails</a></li>
                                    <li class="active"><a href="components_modals.html"><i class="fa fa-arrow-circle-right"></i> Modals</a></li>
                                    <li><a href="components_progress_bars.html"><i class="fa fa-arrow-circle-right"></i> Progress Bars</a></li>
                                    <li><a href="components_tooltip_popover.html"><i class="fa fa-arrow-circle-right"></i> Tooltip &amp; Popover</a></li>
                                </ul>
                            </li>
                            <li><a href="collapses_tabs.html"  class="collapsed"><i class="fa fa-tasks"></i> Collapses &amp; Tabs</a></li>
                            <li><a href="components_vertical_tabs.html"  class="collapsed"><i class="fa fa-tasks"></i> Vertical Tabs</a></li>
                            <li><a href="components_switch.html"  class="collapsed"><i class="fa fa-toggle-on"></i> Switchs Controls</a></li>
                            <li><a href="content_box.html"  class="collapsed"><i class="fa fa-list-alt"></i> Contents Box</a></li>
                            <li><a href="carousels.html"  class="collapsed"><i class="fa fa-play-circle"></i> Carousels</a></li>
                            <li><a href="charts.html"  class="collapsed"><i class="fa fa-tachometer"></i> Charts &amp; CountDowns</a></li>
                            <li><a href="components_cards.html"  class="collapsed"><i class="fa fa-user"></i> Profile Cards</a></li>
                            <li><a href="components_counters.html"  class="collapsed"><i class="fa fa-sort-numeric-asc"></i> Counters</a></li>
                            <li><a href="components_navtabs.html"  class="collapsed"><i class="fa fa-columns"></i> Navbar Tabs</a></li>
                            <li><a href="components_masonry.html"  class="collapsed"><i class="fa fa-th"></i> Masonry Layer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <section class="css-section">
                            <div class="row">
                                <h2 class="section-title no-margin-top"></h2>
                                <?= $content ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
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
                                    <a class="pull-left" href="#"><img class="media-object" src="assets/img/demo/m2.jpg" width="75" height="75" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                                        <small>August 18, 2013</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="assets/img/demo/m11.jpg" width="75" height="75" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                                        <small>September 14, 2013</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="assets/img/demo/m4.jpg" width="75" height="75" alt="image"></a>
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
                                        <a href="#" class="thumbnail"><img src="assets/img/demo/wf1.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                        <a href="#" class="thumbnail"><img src="assets/img/demo/wf2.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                        <a href="#" class="thumbnail"><img src="assets/img/demo/wf3.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                        <a href="#" class="thumbnail"><img src="assets/img/demo/wf4.jpg" class="img-responsive" alt="Image"></a>
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
    </div> <!-- sb-site -->

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



    <?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
