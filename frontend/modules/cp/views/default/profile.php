<?php

use common\models\Branch;
use common\models\UserRole;
use common\models\UserType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <div class="card-body">
        <div class="user-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'username')->textInput(['maxlength' => true,'disabled'=>true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

            <br>
            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>