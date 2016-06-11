<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JahitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jahit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'ongkos') ?>

    <?= $form->field($model, 'potong') ?>

    <?= $form->field($model, 'steam') ?>

    <?php // echo $form->field($model, 'plastik') ?>

    <?php // echo $form->field($model, 'gas') ?>

    <?php // echo $form->field($model, 'listrik') ?>

    <?php // echo $form->field($model, 'makan') ?>

    <?php // echo $form->field($model, 'benang') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'last_edit') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
