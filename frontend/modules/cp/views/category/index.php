<?php

use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bo`limlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">


    <div class="card">
        <div class="card-body">
            <p>
                <?= Html::a('Bo`lim qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
                    'name',
                    [
                        'attribute' => 'icon',
                        'format' => 'raw',
                        'value' => function (Category $model) {
                            return Html::img('/upload/icon'.$model->icon, ['class' => 'img-thumbnail']);
                        }
                    ],
//                    'icon',
//                    'icon_type',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>


</div>
