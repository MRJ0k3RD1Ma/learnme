<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\BackAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

BackAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="theme-color-two">
<?php $this->beginBody() ?>




<?= $this->render('_header')?>

<div id="main-wrapper">
    <?= $content?>
</div>




<!--======  footer area =======-->
<footer class="footer-area footer-two">
    <div class="footer-top-area">
        <div class="container-fluid container-custom-xl">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="/design/images/logo-2.png" alt="">
                            </a>
                        </div>
                        <p>Bu sayt orqali siz dasturlashdagi eng qiziqarli yo'nalishlardan biri rekursiyalar va algoritmlarni o'rganishingiz mumkin.
                        </p>
                        <ul class="footer-socail-share">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-skype"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="footer-menu-widget">

                        <div class="single-footer-menu"  style="width: 49%">
                            <div class="footer-widget-title">
                                <h4 class="title">Biz haqimizda</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li><a href="#!">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cupiditate explicabo ipsum natus numquam quae quod ratione tempora ut vitae. Alias commodi est hic inventore itaque nobis nulla ratione reprehenderit.</a></li>

                            </ul>
                        </div>
                        <div class="single-footer-menu" style="width: 49%">
                            <div class="footer-widget-title">
                                <h4 class="title">Foydali</h4>
                            </div>
                            <ul class="footer-widget-menu-list">
                                <li><a href="#!">Algo.ubtuit.uz</a></li>
                                <li><a href="#!">leetcode.com</a></li>
                                <li><a href="#!">codeforces.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 order-lg-3 order-2">
                    <div class="footer-widget footer-subscribe-area">
                        <div class="footer-widget-title">
                            <h4 class="title">Obuna bo`lish</h4>
                        </div>
                        <div class="footer-subscribe-wrap">
                            <div class="single-input">
                                <input type="text" placeholder="Ismingiz">
                            </div>
                            <div class="single-input">
                                <input type="email" placeholder="Email manzil">
                            </div>
                            <div class="button-box">
                                <button class="btn-primary btn-bg-2 btn-large" type="submit">Obuna bo`lish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-center">
                        <p>© 2021 <a href="#">Bunzo</a>. Made with ❤️ by <a target="_blank" rel="noopener" href="https://hasthemes.com/">HasThemes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=====  End of footer area ========-->
















<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top icofont-swoosh-up"></i>
    <i class="arrow-bottom icofont-swoosh-up"></i>
</a>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
