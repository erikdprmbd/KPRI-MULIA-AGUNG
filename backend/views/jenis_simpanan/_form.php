<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenis_simpanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-simpanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_simpanan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
