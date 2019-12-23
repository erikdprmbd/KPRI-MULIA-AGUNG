<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SimpananSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="simpanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_simpanan') ?>

    <?= $form->field($model, 'kode_rekening') ?>

    <?= $form->field($model, 'id_jenis_simpanan') ?>

    <?= $form->field($model, 'id_anggota') ?>

    <?= $form->field($model, 'jumlah_simpanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
