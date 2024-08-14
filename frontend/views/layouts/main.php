<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use frontend\assets\AppAssetLanding;
use yii\helpers\Url;

AppAssetLanding::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="shortcut icon" href="<?= Url::home() ?>landing/images/favicon.ico">
        <?php $this->head() ?>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
    <?php $this->beginBody() ?>
<!--    <div class="spinner-wrapper">-->
<!--        <div class="spinner">-->
<!--            <div class="bounce1"></div>-->
<!--            <div class="bounce2"></div>-->
<!--            <div class="bounce3"></div>-->
<!--        </div>-->
<!--    </div>-->

    <?= $this->render('_components/navbar') ?>
    <?= $this->render('_components/header') ?>
    <?= $content ?>
    <?= $this->render('_components/footer') ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
