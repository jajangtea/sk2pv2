<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap/bootstrap.min.css',
        'vendor/icon-awesome/css/font-awesome.min.css',
        'vendor/icon-line/css/simple-line-icons.css',
        'vendor/icon-etlinefont/style.css',
        'vendor/icon-line-pro/style.css',
        'vendor/icon-hs/style.css',
        'vendor/hs-admin-icons/hs-admin-icons.css',
        'vendor/animate.css',
        'vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css',
        'vendor/flatpickr/dist/css/flatpickr.min.css',
        'vendor/bootstrap-select/css/bootstrap-select.min.css',
        'vendor/chartist-js/chartist.min.css',
        'vendor/chartist-js-tooltip/chartist-plugin-tooltip.css',
        'vendor/fancybox/jquery.fancybox.min.css',
        'vendor/hamburgers/hamburgers.min.css',
        'css/unify-admin.css',
        'css/custom.css',
        'vendor/dzsparallaxer/dzsparallaxer.css',
        'vendor/dzsparallaxer/dzsscroller/scroller.css',
        'vendor/dzsparallaxer/advancedscroller/plugin.css',
        'vendor/plyr/dist/plyr.css',
        'vendor/hs-bg-video/hs-bg-video.css',
        'vendor/hs-megamenu/src/hs.megamenu.css',
        'css/unify-core.css',
        'css/unify-components.css',
        'css/unify-globals.css',
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/jquery-migrate/jquery-migrate.min.js',
        'vendor/popper.js/popper.min.js',
        'vendor/bootstrap/bootstrap.min.js',
        'vendor/cookiejs/jquery.cookie.js',
        'vendor/jquery-ui/ui/widget.js',
        'vendor/jquery-ui/ui/version.js',
        'vendor/jquery-ui/ui/keycode.js',
        'vendor/jquery-ui/ui/position.js',
        'vendor/jquery-ui/ui/unique-id.js',
        'vendor/jquery-ui/ui/safe-active-element.js',
        'vendor/jquery-ui/ui/widgets/menu.js',
        'vendor/jquery-ui/ui/widgets/mouse.js',
        'vendor/jquery-ui/ui/widgets/datepicker.js',
        'vendor/appear.js',
        'vendor/bootstrap-select/js/bootstrap-select.min.js',
        'vendor/flatpickr/dist/js/flatpickr.min.js',
        'vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'vendor/chartist-js/chartist.min.js',
        'vendor/chartist-js-tooltip/chartist-plugin-tooltip.js',
        'vendor/fancybox/jquery.fancybox.min.js',
        'js/hs.core.js',
        'js/components/hs.side-nav.js',
        'js/helpers/hs.hamburgers.js',
        'js/components/hs.range-datepicker.js',
        'js/components/hs.datepicker.js',
        'js/components/hs.dropdown.js',
        'js/components/hs.scrollbar.js',
        'js/components/hs.area-chart.js',
        'js/components/hs.donut-chart.js',
        'js/components/hs.bar-chart.js',
        'js/helpers/hs.focus-state.js',
        'js/components/hs.popup.js',
        'js/custom.js',
        'vendor/jquery/jquery.min.js"',
        'vendor/jquery-migrate/jquery-migrate.min.js"',
        'vendor/popper.js/popper.min.js"',
        'vendor/bootstrap/bootstrap.min.js"',
        'vendor/hs-megamenu/src/hs.megamenu.js"',
        'vendor/dzsparallaxer/dzsparallaxer.js"',
        'vendor/dzsparallaxer/dzsscroller/scroller.js"',
        'vendor/dzsparallaxer/advancedscroller/plugin.js"',
        'vendor/hs-bg-video/hs-bg-video.js"',
        'vendor/hs-bg-video/vendor/player.min.js"',
        'js/hs.core.js"',
        'js/components/hs.header.js"',
        'js/helpers/hs.hamburgers.js"',
        'js/components/hs.tabs.js"',
        'js/helpers/hs.bg-video.js"',
        'js/components/hs.go-to.js"',
        'js/helpers/hs.focus-state.js"',
        'js/custom.js"',
    ];
    public $depends = [
        'yii\web\YiiAsset',
            //'yii\bootstrap\BootstrapAsset',
    ];

}
