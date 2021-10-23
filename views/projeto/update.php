<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */

$this->title = 'Atualizar Projeto: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Projeto', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projeto-update">

<div class="card-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

</div>
