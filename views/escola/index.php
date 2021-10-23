<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Usuario;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EscolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Escola';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escola-index card card-outline card-primary">

<div class="card-header">

    <p>
        <?= Html::a('Cadastrar Escola', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            // [
            //     'attribute'=>'id',
            //     'filterInputOptions' => [
            //         'class'       => 'form-control',
            //         'placeholder' => 'Digite o ID e confirme'
            //     ], 
            // ],
            [
                'attribute'=>'nome',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o nome e confirme'
                ], 
            ],

            [
                'attribute'=>'telefone',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o telefone e confirme'
                ], 
            ],
            [
                'attribute'=>'email',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o email e confirme'
                ], 
            ],
            [
                'label'=>'Usuário',
                'attribute'=>'usuario.nome',
                'filter' => Html::activeDropDownList($searchModel, 'usuario.nome', 
                ArrayHelper::map(Usuario::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione um usuário']),
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


</div>
