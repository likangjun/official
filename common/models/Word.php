<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "word".
 *
 * @property integer $id
 * @property string $username
 * @property string $mobile
 * @property string $content
 * @property string $create_time
 */
class Word extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'word';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'mobile'], 'string'],
            [['create_time'], 'safe'],
            [['username'], 'string', 'max' => 16],
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
            'content' => '内容',
            'create_time' => '发表时间',
        ];
    }
}
