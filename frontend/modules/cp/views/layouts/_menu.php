<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?= Yii::$app->urlManager->createUrl(['/cp/'])?>" class="waves-effect">
                        <i class="mdi mdi-home-variant-outline"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= Yii::$app->urlManager->createUrl(['/cp/news'])?>" class="waves-effect">
                        <i class="mdi mdi-view-list"></i>
                        <span>Maqolalar</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Yii::$app->urlManager->createUrl(['/cp/category'])?>" class="waves-effect">
                        <i class="mdi mdi-card-text"></i>
                        <span>Bo`limlar</span>
                    </a>
                </li>

                <li>
                    <a href="<?= Yii::$app->urlManager->createUrl(['/cp/tags'])?>" class="waves-effect">
                        <i class="mdi mdi-tag"></i>
                        <span>Teglar</span>
                    </a>
                </li>
                <li>
                    <a href="<?= Yii::$app->urlManager->createUrl(['/cp/user'])?>" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span>Foydalanuvchilar</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

