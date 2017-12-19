<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '案例管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cases-index">

    <p>
        <?= Html::a('新增案例', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'box-body table-responsive no-paddin'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'tableOptions' => ['class' => 'table table-striped'],
        'columns' => [
            'id',
            'project_name',
            'style',
            'desinger_name',
            'create_time',
            [
                'format' => 'raw',
                'attribute' => 'push',
                'value' => function ($model) {
                    return SwitchInput::widget([
                        'name' => 'push',
                        'id' => $model->id,
                        'value' => $model->push == 1 ? true : false,
                        'pluginOptions' => [
                            'size' => 'mini', //设置尺寸大小
                            'onColor' => 'success',
                            'offColor' => 'danger',
                            'onText' => '是',
                            'offText' => '否',
                        ],
                    ]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php $this->beginBlock('scripts'); ?>
<script>
    $('input[name="push"]').on('switchChange.bootstrapSwitch', function (event, state) {
        var i = $(this).attr('id');
        $.post("index.php?r=case/push", {
            "id": i,
            "<?= Yii::$app->request->csrfParam ?>": '<?= Yii::$app->request->csrfToken ?>'
        }, function (data) {
            var res = JSON.parse(data);
        });
    });
</script>
<?php $this->endBlock(); ?>