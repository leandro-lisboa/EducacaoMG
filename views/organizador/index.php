<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Organizador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'cargo',
            'escola_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
