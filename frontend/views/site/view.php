<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-wrapper-reveal">

    <div class="hero-area-two-wrapper">
        <!-- Hero Area Start -->
        <div class="hero-area-two hero-area-overly">
            <div class="container">
                <div class="col-lg-12">
                    <div class="hero-area--two-innter text-center">
                        <h2><span class="hero-title-small"><?= $this->title?></span></h2>

                    </div>
                </div>
            </div>
        </div><!-- Hero Area End -->
    </div>

</div>


<!-- Recent Article Area Start -->
<div class="recent-article-area section-space--pb_120">
    <div class="container">

        <div class="row row--30">
            <?= $model->long?>

        </div>
    </div>
</div>
<!-- Recent Article Area End -->
