<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Statistic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statistic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nhl_id')->textInput() ?>

    <?= $form->field($model, 'comand_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'game_count')->textInput() ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
