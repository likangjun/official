<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "field".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 */
class Field extends \yii\db\ActiveRecord
{
    public $image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['image'], 'safe'],
            [['name'], 'string', 'max' => 16],
            [['name', 'image'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'content' => '描述',
            'image' => '图片',
        ];
    }


    //图片存储
    public function afterSave($insert, $changedAttributes)
    {
        $type = Lookup::IMAGE_TYPE_FIELD;

        if ($this->image && $this->image != '') {
            $album = explode(',', $this->image);
            Image::deleteAll("obj_id = '$this->id' and type = '$type'");
            if ($album && count($album) > 0) {
                foreach ($album as $v) {
                    $model = new Image();
                    $model->img_url = $v;
                    $model->type = $type;
                    $model->obj_id = $this->id;
                    $model->save();
                }
            }
        }
    }

    public static function fieldList()
    {
        return self::find()->asArray()->all();
    }
}
