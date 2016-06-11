<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JahitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jahits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jahit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jahit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'ongkos',
            'potong',
            'steam',
            // 'plastik',
            // 'gas',
            // 'listrik',
            // 'makan',
            // 'benang',
            // 'total',
            // 'user_id',
            // 'last_edit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
