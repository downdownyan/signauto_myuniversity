<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SignmanualSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signmanual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mobile') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'jindu') ?>

    <?= $form->field($model, 'weidu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
