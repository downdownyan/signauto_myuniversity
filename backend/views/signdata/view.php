<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Signdata */

$this->title = $model->mobile;
$this->params['breadcrumbs'][] = ['label' => 'Signdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signdata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mobile], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mobile], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mobile',
            'talk',
            'jingweidu',
        ],
    ]) ?>

</div>
