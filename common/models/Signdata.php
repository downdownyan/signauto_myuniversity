<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "signdata".
 *
 * @property integer $mobile
 * @property string $talk
 * @property integer $jingweidu
 */
class Signdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'signdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'talk', 'jingweidu'], 'required'],
            [['mobile', 'jingweidu'], 'integer'],
            [['talk'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mobile' => '手机号',
            'talk' => '啰嗦',
            'jingweidu' => '坐标',
        ];
    }
    public function geturl(){
        $mobile=$this->mobile;
        $talk=$this->talk;
        $jingweidu=$this->jingweidu;
        return $url='kjlk.lksjdl.ll?mobile='.$mobile.'&talk='.$talk.'&jingweidu='.$jingweidu;
    }
}
