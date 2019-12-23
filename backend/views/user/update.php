<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

$this->title = 'Update User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username ]];
?>
<div class="anggota-update">

    <?= $this->render('change-password', [
        'model' => $model,
    ]) ?>

</div>
