<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Tags $model */

$this->title = 'Teg qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Teglar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-create">

    <div class="card">
        <div class="card-body">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
