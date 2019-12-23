<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AnggotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_anggota') ?>

    <?= $form->field($model, 'nama_anggota') ?>

    <?= $form->field($model, 'alamat_anggota') ?>

    <?= $form->field($model, 'no_telp_anggota') ?>

    <?= $form->field($model, 'jk_anggota') ?>

    <?php // echo $form->field($model, 'id_golongan') ?>

    <?php // echo $form->field($model, 'id_jabatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
