<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $is_delete
 * @property string $username
 * @property string $mobile
 * @property string $project_name
 * @property string $area
 * @property string $style
 * @property string $create_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'is_delete'], 'safe'],
            [['username', 'mobile', 'project_name', 'area', 'style'], 'string', 'max' => 16],
            [['username', 'mobile', 'project_name', 'area', 'style'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '姓名',
            'mobile' => '手机',
            'project_name' => '项目名称',
            'area' => '面积',
            'style' => '风格',
            'create_time' => '创建时间',
        ];
    }
}
