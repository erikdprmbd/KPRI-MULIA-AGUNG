<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Simpanan */

$this->title = 'Update Simpanan: ' . $model->id_simpanan;
$this->params['breadcrumbs'][] = ['label' => 'Simpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_simpanan, 'url' => ['view', 'id' => $model->id_simpanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="simpanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
