
<!--========  header area =========-->
<header class="header-two position--absolute">

    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-5">
                    <div class="logo">
                        <a href="/">
                            <img src="/design/images/logo-2.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-lg-block d-none">
                    <div class="main-menu-area text-center">
                        <nav class="navigation-menu navigation-menu-white ">
                            <ul>
                                <li>
                                    <a href="/"><span>Asosiy</span></a>
                                </li>
                                <li class="has-children"><a href="#"><span>Maqolalar</span></a>
                                    <ul class="submenu">
                                        <?php foreach (\common\models\Category::find()->all() as $item):?>
                                            <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/news/','id'=>$item->id])?>"><span><?= $item->name ?></span></a> </li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['/site/about'])?>"><span>Biz haqimizda</span></a>
                                </li>


                                <li><a href="#"><span>Bog'lanish </span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-9 col-7">
                    <div class="header-two-right-side">
                        <a href="<?= Yii::$app->urlManager->createUrl(['/cp/'])?>" class="single-action-item">
                            <img src="/design/images/user-white.png" alt="">
                        </a>
                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon icon-white d-block d-lg-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
<!--======== End of header area  =========-->

