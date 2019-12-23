<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GolonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_golongan',
            'nama_golongan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
