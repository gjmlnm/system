<?php
namespace app\modules\goods\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class TestController extends Controller
{

    public function actionIndex()
    {
		
		
        return $this->renderPartial('index');
    }
	
	
	public function actionWelcome()
	{
		
		return $this->rederPartial('welcome');
	}

}
