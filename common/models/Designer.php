<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "designer".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $desc
 * @property string $mail
 * @property string $create_time
 * @property integer $order
 */
class Designer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'designer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['create_time'], 'safe'],
            [['order'], 'integer'],
            [['name'], 'string', 'max' => 16],
            [['desc', 'mail'], 'string', 'max' => 32],
            [['name', 'image', 'desc'], 'required'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名字',
            'image' => '头像',
            'desc' => '职位',
            'mail' => '邮箱',
            'create_time' => '创建时间',
            'order' => '排序',
        ];
    }
}
