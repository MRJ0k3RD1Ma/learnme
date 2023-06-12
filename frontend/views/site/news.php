<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = $cat->name;
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
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center section-border-bottom">
                    <h2>So'ngi maqolalar</h2>
                </div>
            </div>
        </div>
        <div class="row row--30">
            <?php foreach ($model as $item):?>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Most Populer Item Start -->
                    <div class="single-most-populer-item" data-aos="fade-up">
                        <a href="<?= Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>" class="most-populer-thum">
                            <img src="/upload/news/<?= $item->image?>" alt="" />
                        </a>
                        <div class="most-populer-content">
                            <h3 class="title"><a href="<?= Yii::$app->urlManager->createUrl(['/site/view','id'=>$item->id])?>"><?= $item->name ?></a>
                            </h3>
                            <p class="dec mt-2"><?= $item->short?></p>
                            <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#"><?= date('Y, d M',strtotime($item->created))?></a>
                                    </span>
                            </div>
                        </div>
                    </div><!-- Single Most Populer Item End -->
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Recent Article Area End -->
