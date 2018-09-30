<?php
namespace app\modules\assets\admin;

use yii\web\AssetBundle;
use yii\web\View;

class ConditionAsset extends AssetBundle
{
    public $basePath = '@webroot/static/plugins';
    public $baseUrl = '@web/static/plugins';
    
    public $css = [

    ];
    
    public $js = [
        'plugins/html5shiv/3.7.3/html5shiv.min.js',
        'plugins/respond/1.4.2/respond.min.js',
    ];
    
    public $jsOptions = [
        'condition' => 'lt IE9',
        'position' => View::POS_HEAD,
    ];
    
    public $depends = [
        //'app\modules\assets\admin\AdminAsset',
    ];
}