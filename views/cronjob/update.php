<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\gestione\Cronjob */

$this->title = Yii::t('gestione', 'Update {modelClass}: ', [
    'modelClass' => 'Cronjob',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('gestione', 'Cronjobs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('gestione', 'Update');
?>
<div class="cronjob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>