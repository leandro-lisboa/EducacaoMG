<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Escola;
use app\models\Organizador;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projeto-form card card-outline card-primary">

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escola_id')->
       dropDownList(ArrayHelper::map(Escola::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione uma escola'] )
    ?>

    <?= $form->field($model, 'data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organizador_id')->
       dropDownList(ArrayHelper::map(Organizador::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione um organizador'] )
    ?>

    <?= $form->field($model, 'anexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-warning']) ?>
        <?= Html::submitButton('<i class="fa fa-check-square"></i> Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
