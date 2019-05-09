<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nhl */

$this->title = 'Create Nhl';
$this->params['breadcrumbs'][] = ['label' => 'Nhls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nhl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
