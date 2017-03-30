<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Signdata */

$this->title = 'Create Signdata';
$this->params['breadcrumbs'][] = ['label' => 'Signdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
