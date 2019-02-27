<?php

use yii\bootstrap\Modal;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this View */

$this->title = 'Modals';
?>
<div class="site-index">

    <?php
    Modal::begin([
        'id' => 'categoryModal',
        'size' => 'modal-md',
        'header' => '<h2>Hello world</h2>',
    ]);
    Pjax::begin([
        'id' => 'pjax-modal', 'timeout' => false,
        'enablePushState' => false,
        'enableReplaceState' => false,
    ]);

    Pjax::end();
    Modal::end();
    ?>

</div>
