<?php
namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\Menu;

class IndexController extends Controller
{
    public function actionIndex()
    {
        \Yii::$app->view->params['menus'] = Menu::find()->orderBy(['sort' => SORT_DESC])->all();
        return $this->render('index');
    }
}