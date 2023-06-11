<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\News $model */

$this->title = 'Maqola qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Maqolalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
