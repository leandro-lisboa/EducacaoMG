<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organizador */

$this->title = 'Cadastrar Organizador';
$this->params['breadcrumbs'][] = ['label' => 'Organizador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizador-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
