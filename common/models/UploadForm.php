<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\helpers\Url;

class UploadForm extends Model
{
    public $imageFile;

    public $title;

    public $type;

    public $url;

    public function attributeLabels()
    {
        return array(
            'title' => '标题',
            'imageFile' => '文件',
            'type' => '类型',
            'url' => '地址',
        );
    }

    public function rules()
    {
        return
            [
                [['title', 'imageFile', 'type', 'url'], 'safe'],
                [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ];
    }

    public function upload()
    {
        $result = [];
        foreach ($this->imageFile as $file) {
            //路径
            $path = Yii::$app->params['basePath'];
            //文件名
            $filename = 'resources/images/' . md5(uniqid(mt_rand(), true)) . '.' . $file->extension;
            //相对路径
            if ($file->saveAs($path . $filename)) {
                //绝对路径地址
                $result[] = '../../' . $filename;
            }
        }
        return implode(',', $result);
    }
}