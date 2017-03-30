<?php
namespace common\models;
/**
 * Created by PhpStorm.
 * User: downdown
 * Date: 2017/3/19
 * Time: 3:18
 */
/*
获取签到的请求url
*/
class Signurl
{
    public function getUrl()
    {
        $mobile = 12345678;
        $jingdu = 11111;


        return $url = 'local.llll.com?mobile=' . $mobile . '&jingdu' . $jingdu;
    }
}