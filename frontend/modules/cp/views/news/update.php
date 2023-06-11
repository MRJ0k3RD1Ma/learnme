<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\News $model */

$this->title = 'O`zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O`zgartirish';
?>
<div class="news-update">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
