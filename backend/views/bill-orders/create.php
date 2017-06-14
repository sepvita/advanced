<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BillOrders */

$this->title = 'Create Bill Orders';
$this->params['breadcrumbs'][] = ['label' => 'Bill Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
