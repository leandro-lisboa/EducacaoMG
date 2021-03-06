<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organizador */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Organizador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="organizador-view card card-outline card-primary">

<div class="card-body">

    <p>
        <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('<i class="fa fa-spinner"></i> Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash"></i> Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar este organizador?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'cargo',
            [
                'attribute'=>'escola.nome',
                'label'=>'Escola'
            ],
        ],
    ]) ?>

</div>

</div>
