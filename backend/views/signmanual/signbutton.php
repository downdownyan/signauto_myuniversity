<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Signmanual */

$this->title = '编辑数据，签到: ' . $model->mobile;
$this->params['breadcrumbs'][] = ['label' => 'Signmanuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mobile, 'url' => ['view', 'id' => $model->mobile]];
$this->params['breadcrumbs'][] = 'Update';
?>

<form method="get" action="https://zhaopin.0fafa.com/work/doudou/shixi/insert_qiandao.php">


    手机：<input type="text" name="mobile" value="<?=$model->mobile?>"><br>
    废话：<input type="text" name="content" value="<?=$model->content?>"><br>
    <!--    图片就是空-->
    <input type="text" name="image" hidden><br>
    经度：<input type="text" name="jindu"  value="<?=$model->jindu?>"><br>
    维度：<input type="text" name="weidu" value="<?=$model->weidu?>"><br>
    <button>签到</button>

</form>