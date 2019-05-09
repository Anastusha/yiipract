<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nhl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country_code',
            'rank',
            'comand_count',
            'foundation_date',
            //'season',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
