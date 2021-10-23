<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */

$this->title = 'Cadastrar Projeto';
$this->params['breadcrumbs'][] = ['label' => 'Projeto', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projeto-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
