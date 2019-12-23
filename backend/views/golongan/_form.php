<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Golongan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="golongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_golongan')->textInput() ?>

    <?= $form->field($model, 'nama_golongan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
