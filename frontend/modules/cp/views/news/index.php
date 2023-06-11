<?php

use common\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\NewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maqolalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
    <div class="card">
        <div class="card-body">

            <p>
                <?= Html::a('Maqola qo`shish', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
//            'cat_id',
                    'name',
                    [
                        'attribute' => 'cat_id',
                        'value' => function (News $model) {
                            return $model->category->name;
                        },
                        'filter' => \yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id', 'name')
                    ],

//            'short:ntext',
//            'long:ntext',
                    //'image',
                    'created',
                    //'updated',
                    //'user_id',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, News $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>


</div>
