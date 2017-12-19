<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "case".
 *
 * @property integer $id
 * @property integer $push
 * @property integer $desinger_id
 * @property string $project_name
 * @property string $style
 * @property string $create_time
 */
class Cases extends \yii\db\ActiveRecord
{
    public $image;
    public $desinger_name;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'image', 'desinger_id', 'desinger_name', 'push'], 'safe'],
            [['project_name', 'style'], 'string', 'max' => 32],
            [['project_name', 'style', 'image', 'desinger_id'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => '项目名称',
            'style' => '风格',
            'create_time' => '时间',
            'image' => '图片',
            'desinger_name' => '设计师',
            'desinger_id' => '设计师',
            'push' => '推送首页',
        ];
    }

    public function afterFind()
    {
        $this->desinger_name = Designer::find()->select('name')->where(['id' => $this->desinger_id])->scalar();
    }

    //图片存储
    public function afterSave($insert, $changedAttributes)
    {
        $type = Lookup::IMAGE_TYPE_CASE;

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
}
