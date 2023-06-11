<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\News $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'long')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
