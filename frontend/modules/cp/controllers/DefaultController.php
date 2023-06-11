<?php

namespace frontend\modules\cp\controllers;

use common\models\User;
use yii\web\Controller;
use Yii;
/**
 * Default controller for the `cp` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionProfile(){
        $model = User::findOne(Yii::$app->user->id);
        $pas = $model->password;
        if($model->load($this->request->post())){
            if($model->password){
                $model->setPassword($model->password);
            }else{
                $model->password = $pas;
            }
            if($model->save()){
                Yii::$app->session->setFlash('success','Ma`lumotlar saqlandi');
            }else{
                Yii::$app->session->setFlash('error','Ma`lumotlarni saqlashda xatolik');
            }
        }

        $model->password = "";
        return $this->render('profile',[
            'model'=>$model
        ]);

    }
}

