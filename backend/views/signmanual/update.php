<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Signmanual */

$this->title = 'Update Signmanual: ' . $model->mobile;
$this->params['breadcrumbs'][] = ['label' => 'Signmanuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mobile, 'url' => ['view', 'id' => $model->mobile]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="signmanual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
