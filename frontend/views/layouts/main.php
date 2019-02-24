<?php

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
?>
<?= $this->render('header') ?>
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
    <?= $content ?>
</div>
<?= $this->render('footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
