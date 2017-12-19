<?php

use yii\helpers\Url;
use app\models\Region;
 
$this->title = '首页';
 
?>
<div class="row">
	<div class="col-xs-12">
	    <div class="jumbotron">
	        <h1>欢迎光临</h1>
	        <p><code>和晟天成</code>后台管理系统</p>
	        <?php if( Yii::$app->user->isGuest ) { ?>	        
	        <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute(['site/login']);?>">登录</a></p>
	        <?php } ?>
	    </div>
	</div>					
</div>