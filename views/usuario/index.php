<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuário';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // [
            //     'attribute'=>'id',
            //     'filterInputOptions' => [
            //         'class'       => 'form-control',
            //         'placeholder' => 'Digite o ID e confirme'
            //     ], 
            // ],
            [
                'attribute'=>'login',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o login e confirme'
                ], 
            ],
            [
                'attribute'=>'senha',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite senha e confirme'
                ], 
            ],
            [
                'attribute'=>'nome',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o nome e confirme'
                ], 
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
