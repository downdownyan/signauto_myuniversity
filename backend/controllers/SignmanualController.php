<?php

namespace backend\controllers;

use backend\models\Sign;
use Yii;
use common\models\Signmanual;
use common\models\SignmanualSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SignmanualController implements the CRUD actions for Signmanual model.
 */
class SignmanualController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Signmanual models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SignmanualSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionSign()
    {


        return $this->render('sign');
    }

    /**
     * Displays a single Signmanual model.
     * @param integer $id
     * @return mixed
     *
     * 改成签到按钮了***********************
     */
    public function actionView($id)
    {
        $sign=new Sign();
        $model=$this->findModel($id);
        $signurl=$sign->getSignUrl($model);

        $this->redirect($signurl);
    }

    /**
     * Creates a new Signmanual model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Signmanual();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('view',['model'=>$model]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Signmanual model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Signmanual model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Signmanual model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Signmanual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Signmanual::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
/*

    */

    public function actionSignbutton($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['index']);
        } else {
            return $this->render('signbutton', [
                'model' => $model,
            ]);
        }
    }
    public function actionSearch($id)
    {
        $model = $this->findModel($id);

        $searchurl="https://zhaopin.0fafa.com/work/doudou/shixi/qiandao.php?mobile=".$model->mobile;
        $this->redirect($searchurl);


    }
}
