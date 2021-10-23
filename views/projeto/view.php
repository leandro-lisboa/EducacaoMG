<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Projeto', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="projeto-view card card-outline card-primary">

<div class="card-body">

    <p>
        <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('<i class="fa fa-spinner"></i> Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash"></i> Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar este projeto?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            [
                'attribute'=>'escola.nome',
                'label'=>'Escola'
            ],
            'data',
            [
                'attribute'=>'organizador.nome',
                'label'=>'Organizador'
            ],
            'anexo',
            'categoria',
        ],
    ]) ?>

</div>

</div>
