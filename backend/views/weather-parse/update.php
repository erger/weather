<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WeatherParse */

$this->title = 'Update Weather Parse: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Weather Parses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weather-parse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cities' => $cities
    ]) ?>

</div>