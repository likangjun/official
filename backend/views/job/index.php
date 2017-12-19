<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '招聘管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-index">

    <p>
        <?= Html::a('新增职位', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'box-body table-responsive no-paddin'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'tableOptions' => ['class' => 'table table-striped'],
        'columns' => [
            'id',
            'name',
            'function:ntext',
            'create_time',
            [
                'format' => 'raw',
                'attribute' => 'status',
                'value' => function ($model) {
                    return SwitchInput::widget([
                        'name' => 'status',
                        'id' => $model->id,
                        'value' => $model->status == 0 ? true : false,
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
    $('input[name="status"]').on('switchChange.bootstrapSwitch', function (event, state) {
        var i = $(this).attr('id');
        $.post("index.php?r=job/status", {
            "id": i,
            "<?= Yii::$app->request->csrfParam ?>": '<?= Yii::$app->request->csrfToken ?>'
        }, function (data) {
            var res = JSON.parse(data);
        });
    });
</script>
<?php $this->endBlock(); ?>