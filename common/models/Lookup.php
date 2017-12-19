<?php

namespace common\models;

use yii\db\ActiveRecord;

class Lookup extends ActiveRecord
{
    const IMAGE_TYPE = 'image_type';
    const IMAGE_TYPE_STYLE = 1;
    const IMAGE_TYPE_FIELD = 2;
    const IMAGE_TYPE_CASE = 3;

    const NEWS_TYPE = 'news_type';
    const NEWS_TYPE_COOP = 1;
    const NEWS_TYPE_NEWS = 2;

    public function rules()
    {
        return [
            [['id', 'type', 'name', 'code', 'order'], 'safe'],
        ];
    }

    public static function buildDropDownList($name, $hasDefault = false)
    {
        $list = self::getTypeListByType($name);

        $result = [];

        if (!$hasDefault) {
            $result[''] = "未设置";
        }

        foreach ($list as $item) {
            $result[$item->code] = $item->name;
        }

        return $result;
    }


    public static function getTypeListByType($name)
    {
        return Lookup::find()->where(['type' => $name])->orderBy('order')->all();
    }

    public static function getDropDownName($typeName, $code)
    {
        $query = Lookup::find();
        $query->andWhere(['=', 'type', $typeName]);
        $query->andWhere(['=', 'code', $code]);
        $obj = $query->one();
        return $obj->name;
    }
}