<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SimpananSeacrh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Simpanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="simpanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Simpanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_simpanan',
            'kode_rekening',
            'id_jenis_simpanan',
            'id_anggota',
            'jumlah_simpanan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
