<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Signdata */

$this->title = 'Update Signdata: ' . $model->mobile;
$this->params['breadcrumbs'][] = ['label' => 'Signdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mobile, 'url' => ['view', 'id' => $model->mobile]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="signdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
