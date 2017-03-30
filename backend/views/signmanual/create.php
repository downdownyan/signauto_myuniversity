<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Signmanual */

$this->title = 'Create Signmanual';
$this->params['breadcrumbs'][] = ['label' => 'Signmanuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signmanual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
