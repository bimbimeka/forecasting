<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SablonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sablon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'ongkos') ?>

    <?= $form->field($model, 'cat') ?>

    <?= $form->field($model, 'listrik') ?>

    <?php // echo $form->field($model, 'makan') ?>

    <?php // echo $form->field($model, 'press') ?>

    <?php // echo $form->field($model, 'dll') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'last_edit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
