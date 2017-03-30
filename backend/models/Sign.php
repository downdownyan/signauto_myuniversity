<?php

namespace backend\models;

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
class Sign extends \yii\db\ActiveRecord
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
    public function getSignUrl($model){
        $signUrl="https://zhaopin.0fafa.com/work/doudou/shixi/insert_qiandao.php?mobile=".$model->mobile
            ."&content=".$model->content."&image=&jindu=".$model->jindu."&weidu=".$model->weidu;
//        echo $signUrl;
        return $signUrl;
    }
}
