<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
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
<body class="bg-pattern">
<?php $this->beginBody() ?>

<div class="bg-overlay"></div>
<div class="account-pages my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="">

                            <!-- end row -->
                            <h4 class="font-size-18 text-muted mt-2 text-center">Xush kelibsiz !</h4>
                            <p class="mb-5 text-center">Kirish uchun login parollaringizni kiriting.</p>


                            <?= $content ?>

                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Shomurod.</p>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
