<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Escola */

$this->title = 'Atualizar Escola: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Escolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="escola-update">

    <div class="card-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>

</div>
