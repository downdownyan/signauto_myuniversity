<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SigndataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Signdatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signdata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Signdata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mobile',
            'talk',
            'jingweidu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
