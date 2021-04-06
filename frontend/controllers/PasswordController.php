<?php
namespace frontend\controllers;

use yii;
use yii\web\Controller;


class PasswordController extends Controller
{
    public function actionIndex()
    {
       echo  $password = Yii::$app->getSecurity()->generatePasswordHash('qwerty');
       die;
    }

    public function actionPassword()
    {
        $hash = '$2y$13$AUJdQTK7yhl.0iF.EynCqOYjQz52SFjrlgWVW2bqDFTXg5RChkkk';
        // $hash = '$2y$13$m5gpAHjX1wpWaJuFYOf5He8hnn8OGrrY0XPC8KRkMIwNlhEeRVi4.';
        if(Yii::$app->getSecurity()->validatePassword('qwerty',$hash)){
            echo 'password is correct';
        }else{
            echo 'not correct';
            
        }
        die;
    }

}

?>