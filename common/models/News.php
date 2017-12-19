<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $type
 * @property string $title
 * @property string $content
 * @property string $views
 * @property string $create_time
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['content'], 'string'],
            [['create_time'], 'safe'],
            [['title'], 'string', 'max' => 16],
            [['views'], 'string', 'max' => 255],
            [['type', 'title', 'content'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '类型',
            'title' => '标题',
            'content' => '内容',
            'views' => '点击量',
            'create_time' => '发表时间',
        ];
    }

    public static function cutstr_html($string, $sublen)
    {
        $string = strip_tags($string);
        $string = trim($string);
        $string = preg_replace("/\t/", "", $string);
        $string = preg_replace("/\r\n/", "", $string);
        $string = preg_replace("/\r/", "", $string);
        $string = preg_replace("/\n/", "", $string);
        $string = preg_replace("/ /", "", $string);
        $string = preg_replace("/&nbsp;/", "", $string);
        return mb_substr((trim($string)), 0, $sublen, 'utf-8');
    }
}
