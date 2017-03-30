<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Signmanual */

$this->title = 'Create Signmanual';
$this->params['breadcrumbs'][] = ['label' => 'Signmanuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<form method="get" action="https://zhaopin.0fafa.com/work/doudou/shixi/insert_qiandao.php">

    手机：<input type="text" name="mobile"><br>
    废话：<input type="text" name="content" ><br>
    <!--    图片就是空-->
    <input type="text" name="image" hidden><br>
    经度：<input type="text" name="jindu" ><br>
    维度：<input type="text" name="weidu"><br>
    <button>提交</button>

</form>