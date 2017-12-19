<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property integer $type
 * @property integer $order
 * @property string $image
 * @property string $desc
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'order'], 'integer'],
            [['title', 'url', 'image', 'desc'], 'string', 'max' => 128],
            [['image'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'url' => '跳转链接',
            'type' => '类型',
            'order' => '顺序',
            'image' => '图片',
            'desc' => '描述',
        ];
    }

    //banner列表
    public static function bannerList()
    {
        return self::find()->asArray()->orderBy('order asc,id asc')->all();
    }
}
