<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jahit */

$this->title = 'Create Jahit';
$this->params['breadcrumbs'][] = ['label' => 'Jahits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jahit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
