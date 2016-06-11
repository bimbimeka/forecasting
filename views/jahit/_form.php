<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jahit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jahit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ongkos')->textInput() ?>

    <?= $form->field($model, 'potong')->textInput() ?>

    <?= $form->field($model, 'steam')->textInput() ?>

    <?= $form->field($model, 'plastik')->textInput() ?>

    <?= $form->field($model, 'gas')->textInput() ?>

    <?= $form->field($model, 'listrik')->textInput() ?>

    <?= $form->field($model, 'makan')->textInput() ?>

    <?= $form->field($model, 'benang')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'last_edit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
