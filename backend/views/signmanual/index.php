<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SignmanualSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '签到管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signmanual-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'mobile',
            'content',
//            'image',
//            'jindu',
//            'weidu',

//            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}  {search}  {update}  {signbutton}  {delete}',
            'buttons'=>[
                 'signbutton' => function ($url, $model, $key) {
                     $options=[
                        'title'=>Yii::t('yii','编辑签到')
                     ];
                return  Html::a('<span class="glyphicon glyphicon-lock"></span>', $url,$options);
            },
                'view' => function ($url, $model, $key) {
                    $options=[
                        'title'=>Yii::t('yii','签到')
                    ];
                    return  Html::a('<span class="glyphicon glyphicon-check"></span>', $url,$options);
                },
                'update' => function ($url, $model, $key) {
                    $options=[
                        'title'=>Yii::t('yii','修改')
                    ];
                    return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url,$options);
                },
                'delete' => function ($url, $model, $key) {
                    $options=[
                        'title'=>Yii::t('yii','删除')
                    ];
                    return  Html::a('<span class="glyphicon glyphicon-trash"></span>', $url,$options);
                },
                'search' => function ($url, $model, $key) {
                    $options=[
                        'title'=>Yii::t('yii','查')
                    ];
                    return  Html::a('<span class="glyphicon glyphicon-search"></span>', $url,$options);
                },

        ],

            ],
        ],
    ]); ?>
</div>
