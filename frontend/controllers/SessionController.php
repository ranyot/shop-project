<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


// class SessionController extends Controller
// {
//     public function actionIndex()
//     {
//         $session = Yii::$app->session;
//         $session->set('name1','Yii Afrika PHP Fremwork method 1');
//         $session['name2']='Yii Afrika PHP Fremwork method 2';
//         $_SESSION['name3']='Yii Afrika PHP Fremwork method 3';
    
//     }

//     public function actionTest()
//     {
//         $session = Yii::$app->session;
//         $session->open();
//         if ($session->isActive) {
//             echo 'Session is active <br>';
//         }else{
//             echo 'Session is not active <br>';
//         }
//         // $session->remove('name2');
//         echo $session->get('name1').'<br>';
//         echo $session['name2'].'<br>';
//         echo $_SESSION['name3'].'<br>';
//         print_r($session['arr']);

//     }



//     public function actionTest1()
//     {
//         $session = Yii::$app->session;
//         $session->open();
//         $session['arr']=[
//             'id'=>1,
//             'name'=>'Yii',
//             'Phone'=>'123456'
//         ];

//     }

   
// }

class SessionController extends Controller
{
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->set('name1','Yii Uzbek PHP Fremwork method 1');
        $session['name2']='Yii Uzbek PHP Fremwork method 2';
        $_SESSION['name3']='Yii Uzbek PHP Fremwork method 3';
    }

    public function actionTest()
    {
        $session = Yii::$app->session;
        $session -> open();
        if ($session -> isActive) {
            echo "Session is Active <br>";
        }else{
            echo "Session not is Active";
        }
        $session->remove('name2');
        echo $session->get('name1').'<br>';
        echo $session['name2'].'<br>';
        echo $_SESSION['name3'].'<br>';

        print_r($session['arr']);

    }


        public function actionTest1()
    {
        $session = Yii::$app->session;
        $session->open();
        $session['arr']=[
            'id'=>1,
            'name'=>'Yii',
            'Phone'=>'123456'
        ];

    }
}








?>