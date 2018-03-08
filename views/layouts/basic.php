<?php
use app\assets\AppAsset;

AppAsset::register($this);

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php // Html::csrfMetaTags() ?>
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная', '/web/'); ?></li>
            <li role="presentation"><?= Html::a('Статьи', ['post/index']); ?></li>
            <li role="presentation"><?= Html::a('Статья', ['post/show']); ?></li>
        </ul>
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>