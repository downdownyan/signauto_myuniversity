<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "signmanual".
 *
 * @property integer $mobile
 * @property string $content
 * @property integer $image
 * @property integer $jindu
 * @property integer $weidu
 */
class Site
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'content', 'jindu', 'weidu'], 'required'],
            [['mobile', 'image', 'jindu', 'weidu'], 'integer'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mobile' => 'Mobile',
            'content' => 'Content',
            'image' => 'Image',
            'jindu' => 'Jindu',
            'weidu' => 'Weidu',
        ];
    }
}
