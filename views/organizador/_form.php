<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Escola;

/* @var $this yii\web\View */
/* @var $model app\models\Organizador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escola_id')->
       dropDownList(ArrayHelper::map(Escola::find()
           ->orderBy('nome')
           ->all(),'id','nome'),
           ['prompt' => 'Selecione uma escola'] )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
