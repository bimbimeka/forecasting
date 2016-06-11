<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php
        $barang = \app\models\Barang::find()->all();
        $listData = ArrayHelper::map($barang, 'id', 'artikel');
    ?>
    <?= $form->field($model, 'barang_id')->dropDownList($listData,['prompt'=>'-=Pilih Barang=-']) ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'harga_bahan')->textInput() ?>
    
    <?php
        $sablon = \app\models\Sablon::find()->all();
        $listData = ArrayHelper::map($sablon, 'id', 'nama');
    ?>
    <?= $form->field($model, 'sablon_id')->dropDownList($listData,['prompt'=>'-=Pilih Sablon=-']) ?>
    
    <?php
        $jahit = \app\models\Jahit::find()->all();
        $listData = ArrayHelper::map($jahit, 'id', 'nama');
    ?>
    <?= $form->field($model, 'jahit_id')->dropDownList($listData,['prompt'=>'-=Pilih Jahit=-']) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
