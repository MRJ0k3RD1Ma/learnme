<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tags $model */

$this->title = 'O`zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teglar', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'O`zgartirish';
?>
<div class="tags-update">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
