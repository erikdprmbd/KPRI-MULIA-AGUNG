<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenis_simpanan */

$this->title = 'Create Jenis Simpanan';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Simpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-simpanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
