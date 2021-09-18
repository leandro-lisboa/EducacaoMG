<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjetoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projetos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projeto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Projeto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'escola_id',
            'data',
            'organizador_id',
            //'anexo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
