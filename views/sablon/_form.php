<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sablon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sablon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ongkos')->textInput() ?>

    <?= $form->field($model, 'cat')->textInput() ?>

    <?= $form->field($model, 'listrik')->textInput() ?>

    <?= $form->field($model, 'makan')->textInput() ?>

    <?= $form->field($model, 'press')->textInput() ?>

    <?= $form->field($model, 'dll')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'last_edit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
