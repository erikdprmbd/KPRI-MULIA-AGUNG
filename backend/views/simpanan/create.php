<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Simpanan */

$this->title = 'Create Simpanan';
$this->params['breadcrumbs'][] = ['label' => 'Simpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="simpanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
