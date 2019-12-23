<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenis_simpanan */

$this->title = 'Update Jenis Simpanan: ' . $model->id_jenis_simpanan;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Simpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_simpanan, 'url' => ['view', 'id' => $model->id_jenis_simpanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-simpanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
