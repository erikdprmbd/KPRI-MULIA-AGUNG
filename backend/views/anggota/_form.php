<?php
use yii\caching\DbQueryDependency;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Anggota;
use backend\models\Golongan;
use backend\models\Jabatan;
/* @var $this yii\web\View */
/* @var $model backend\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_anggota')->textInput() ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp_anggota')->textInput() ?>

    <?= $form->field($model, 'jk_anggota')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?php
      $anggota=Golongan::find()->all();
      $listData=ArrayHelper::map($anggota,'id_golongan','nama_golongan');
      echo $form->field($model, 'id_golongan')->dropDownList(
        $listData,
        ['prompt'=>'-- Jenis Golongan --']
      ); ?>

      <?php
        $anggota=Jabatan::find()->all();
        $listData=ArrayHelper::map($anggota,'id_jabatan','nama_jabatan');
        echo $form->field($model, 'id_jabatan')->dropDownList(
          $listData,
          ['prompt'=>'-- Jenis Jabatan --']
        ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
