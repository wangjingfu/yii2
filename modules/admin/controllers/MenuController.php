<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Menu;
use app\modules\admin\controllers\AdminController;

class MenuController extends AdminController
{
    public function actionIndex()
    {
        $menus = Menu::find()->orderBy(['parent_id' => SORT_ASC, 'sort' => SORT_DESC])->all();
        return $this->render('index', ['menus' => $menus]);
    }

}
