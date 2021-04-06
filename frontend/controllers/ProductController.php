<?php
use yii\helpers\Url;
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use backend\models\Products;
use yii\data\ActiveDataProvider;


/**
 * Site controller
 */
class ProductController extends Controller
{   

    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');
        
        // $product = Products::findOne($id);
        
        if ($id == "") {
            $product = Products::find()->where(['status'=>1])->one();
        }else {
            $product = Products::find()->where(['id'=>$id, 'status'=>1])->one();
        }
        
        return $this->render('index',['product'=>$product]);
    }
    public function actionDelete(){
        $data = Yii::$app->request->post('id');
        return  $data;
    }
}
