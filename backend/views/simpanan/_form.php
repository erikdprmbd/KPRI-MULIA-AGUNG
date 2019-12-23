<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Jenis_simpanan;
use backend\models\Anggota;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Simpanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="simpanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_rekening')->textInput() ?>

    <?php
      $anggota=Jenis_simpanan::find()->all();
      $listData=ArrayHelper::map($anggota,'id_jenis_simpanan','nama_simpanan');
      echo $form->field($model, 'id_jenis_simpanan')->dropDownList(
        $listData,
        ['prompt'=>'-- Jenis Simpanan --']
      ); ?>

      <?php
        $anggota=Anggota::find()->all();
        $listData=ArrayHelper::map($anggota,'id_anggota','nama_anggota');
        echo $form->field($model, 'id_anggota')->dropDownList(
          $listData,
          ['prompt'=>'-- Daftar Anggota --']
        ); ?>

    <?= $form->field($model, 'jumlah_simpanan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
