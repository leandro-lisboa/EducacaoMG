<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizador */

$this->title = 'Atualizar Organizador: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Organizador', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="organizador-update">

<div class="card-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

</div>
