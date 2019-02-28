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
    <?= $content ?>
</div> <!-- container  -->

<?= $this->render('footer') ?>

</div> <!-- boxed -->
</div> <!-- sb-site -->

<?= $this->render('slider') ?>
</body>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
