<?php
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public $name;
    public $code;
    public $population;
    
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'name' => '国家/地区',
            'code' => '国家编码',
            'population' => '人口数量',
        ];
    }
}