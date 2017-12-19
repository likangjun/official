<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $id
 * @property integer $status
 * @property string $name
 * @property string $describe
 * @property string $content
 * @property string $function
 * @property string $create_time
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['describe', 'content', 'function'], 'string'],
            [['create_time', 'status'], 'safe'],
            [['name'], 'string', 'max' => 16],
            [['describe', 'content', 'name'], 'required'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '职位名称',
            'describe' => '职位描述',
            'content' => '岗位职责',
            'function' => '职位职能',
            'create_time' => '创建时间',
            'status' => '是否进行中',
        ];
    }
}
