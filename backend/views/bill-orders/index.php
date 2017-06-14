<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BillOrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bill Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bill Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'alamat',
            'telp',
            'id_member',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
