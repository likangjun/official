<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "process".
 *
 * @property integer $id
 * @property integer $is_delete
 * @property integer $status
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $create_time
 */
class Process extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'process';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'is_delete'], 'safe'],
            [['title'], 'string', 'max' => 32],
            [['title', 'content'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'title' => '标题',
            'content' => '内容',
            'status' => '读取状态',
            'create_time' => '发布时间',
        ];
    }
}
