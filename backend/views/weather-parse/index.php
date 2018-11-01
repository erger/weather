<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WeatherParseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weather Parses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-parse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Weather Parse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'city_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
