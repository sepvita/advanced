<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BillOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput() ?>

    <?= $form->field($model, 'telp')->textInput() ?>

    <?= $form->field($model, 'id_member')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
