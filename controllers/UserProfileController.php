<?php

namespace app\controllers;

use Yii;
use app\models\UserProfile;
use app\models\UserProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserProfileController implements the CRUD actions for UserProfile model.
 */
class UserProfileController extends Controller
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
     * Lists all UserProfile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserProfile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserProfile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserProfile();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file){
                $imagepath = 'uploads/image/';
                $model->profile_picture = $imagepath.rand(10,100).$model->file->name;
            }
               if($model->save()){
                if($model->file){
                    $model->file->saveAs($model->profile_picture);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
               }
                return $this->redirect(['view', 'id' => $model->id]);
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserProfile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file){
                $imagepath = 'uploads/image/';
                $model->profile_picture = $imagepath .rand(10,100).$model->file->name;
            }

            if($model->save()){
                if($model->file){
                    $model->file->saveAs($model->profile_picture);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
            
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    /*Delete Profile Picture*/
    
    public function actionRemove($id)
    {
        $profile_picture = UserProfile::find()->where(['id'=>$id])->one()->profile_picture;
        if($profile_picture){
            if(!unlink($profile_picture)){
                return false;
            }
        }

        $userprofile = UserProfile::findOne($id);
        $userprofile->profile_picture = NULL;
        $userprofile->update();

        return $this->redirect(['update', 'id'=>$id]);
    }

    /**
     * Deletes an existing UserProfile model.
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
     * Finds the UserProfile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserProfile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserProfile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
