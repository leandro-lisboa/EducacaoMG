<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Escola;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganizadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organizador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizador-index card card-outline card-primary">

<div class="card-header">

    <p>
        <?= Html::a('Cadastrar Organizador', ['create'], ['class' => 'btn btn-primary']) ?>
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
                'attribute'=>'cargo',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Digite o cargo e confirme'
                ], 
            ],
            [
                'label'=>'Escola',
                'attribute'=>'escola.nome',
                'filter' => Html::activeDropDownList($searchModel, 'escola.nome', 
                ArrayHelper::map(Escola::find()->asArray()->orderby('nome')->all(), 'nome', 'nome'),
                    ['class'=>'form-control','prompt' => 'Selecione uma escola']),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


</div>
