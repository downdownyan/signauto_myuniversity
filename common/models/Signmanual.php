<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "signmanual".
 *
 * @property integer $mobile
 * @property string $content
 * @property integer $image
 * @property string $jindu
 * @property string $weidu
 */
class Signmanual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'signmanual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'content', 'jindu', 'weidu'], 'required'],
            [['mobile', 'image'], 'integer'],
            [['content'], 'string', 'max' => 255],
            [['jindu', 'weidu'], 'string', 'max' => 20],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mobile' => '手机号',
            'username' => '姓名',
            'content' => '说话',
            'image' => '图片',
            'jindu' => '经度',
            'weidu' => '维度',
        ];
    }
}
