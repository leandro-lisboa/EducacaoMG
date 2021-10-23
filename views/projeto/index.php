<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Escola;
use app\models\Organizador;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjetoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projeto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projeto-index card card-outline card-primary">

<div class="card-header">

    <p>
        <?= Html::a('Cadastrar Projeto', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'nome',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o nome e confirme'
                ], 
            ],
            [
                'label'=>'Escola',
                'attribute'=>'escola.nome',
                'filter' => Html::activeDropDownList($searchModel, 'escola.nome', 
                ArrayHelper::map(Escola::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione uma escola']),
            ],
            [
                'attribute'=>'data',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite a data e confirme'
                ], 
            ],
            [
                'label'=>'Organizador',
                'attribute'=>'organizador.nome',
                'filter' => Html::activeDropDownList($searchModel, 'organizador.nome', 
                ArrayHelper::map(Organizador::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione um organizador']),
            ],
            [
                'attribute'=>'anexo',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o anexo e confirme'
                ], 
            ],
            [
                'attribute'=>'categoria',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite a categoria e confirme'
                ], 
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


</div>
