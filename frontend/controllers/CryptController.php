<?php
namespace frontend\controllers;

Use Yii;
use yii\web\Controller;




class CryptController extends Controller
{
    public function actionIndex()
    {
        echo '<h1>Cryptography</h1>';
        echo Yii::$app->getSecurity()->generateRandomString(112);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo Yii::$app->getSecurity()->generatePasswordHash('password');

        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<h1>Enc & Dec</h1>';

        echo $encrypt = Yii::$app->getSecurity()->encryptByPassword('My name is Inomjon', 'f12');
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $decrypt = Yii::$app->getSecurity()->decryptByPassword($encrypt, 'f12');

        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<h1> Data integrity </h1>';
        echo $data = Yii::$app->getSecurity()->hashData('My name is Inomjon','qwerty');

        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo Yii::$app->getSecurity()->validateData($data, 'qwerty');

        die;
    }
}

?>