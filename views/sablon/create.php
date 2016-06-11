<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sablon */

$this->title = 'Create Sablon';
$this->params['breadcrumbs'][] = ['label' => 'Sablons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sablon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
