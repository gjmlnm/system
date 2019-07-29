<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class IndexController extends Controller
{
    /**
     * 首页模板
     * 
     * */
    public function actionIndex()
    {
        
        return $this->render('index');
    }

}
