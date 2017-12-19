<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $obj_id
 * @property string $img_url
 */
class Image extends ActiveRecord
{
    public static function tableName()
    {
        return 'image';
    }

    public function rules()
    {
        return
            [
                [['id', 'type', 'img_url', 'obj_id'], 'safe'],
            ];
    }

    //返回图片集
    public static function getImagesListByObjType($obj_id, $type)
    {
        return Image::find()->where(['type' => $type, 'obj_id' => $obj_id])->asArray()->all();
    }

    //返回图片
    public static function getImageByObjType($obj_id, $type)
    {
        return Image::find()->select('img_url')->where(['type' => $type, 'obj_id' => $obj_id])->scalar();
    }
}