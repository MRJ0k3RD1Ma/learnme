<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Bo`lim qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Bo`limlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
