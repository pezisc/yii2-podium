<?php

/**
 * Podium Module
 * Yii 2 Forum Module
 * @author Paweł Bizley Brzozowski <pb@human-device.com>
 * @since 0.1
 */

use yii\helpers\Html;

$this->title = Yii::t('podium/view', 'Delete Thread');
$this->params['breadcrumbs'][] = ['label' => Yii::t('podium/view', 'Main Forum'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => $model->forum->category->name, 'url' => ['default/category', 'id' => $model->forum->category->id, 'slug' => $model->forum->category->slug]];
$this->params['breadcrumbs'][] = ['label' => $model->forum->name, 'url' => ['default/forum', 'cid' => $model->forum->category->id, 'id' => $model->forum->id, 'slug' => $model->forum->slug]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['default/thread', 'cid' => $model->forum->category->id, 'fid' => $model->forum->id, 'id' => $model->id, 'slug' => $model->slug]];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <?= Html::beginForm(); ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <?= Html::hiddenInput('thread', $model->id) ?>
                            <h3 class="text-danger"><?= Yii::t('podium/view', 'Are you sure you want to delete this thread?') ?></h3>
                            <p><?= Yii::t('podium/view', 'All posts in this thread will be deleted as well. This can not be undone.') ?></p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <?= Html::submitButton('<span class="glyphicon glyphicon-ok-sign"></span> ' . Yii::t('podium/view', 'Delete Thread'), ['class' => 'btn btn-block btn-danger', 'name' => 'delete-button']) ?>
                        </div>
                        <div class="col-sm-6">
                            <?= Html::a('<span class="glyphicon glyphicon-remove"></span> ' . Yii::t('podium/view', 'Cancel'), ['default/thread', 'cid' => $model->forum->category->id, 'fid' => $model->forum->id, 'id' => $model->id, 'slug' => $model->slug], ['class' => 'btn btn-block btn-default', 'name' => 'cancel-button']) ?>
                        </div>
                    </div>
                </div>
            <?= Html::endForm(); ?>
        </div>
    </div>
</div><br>
