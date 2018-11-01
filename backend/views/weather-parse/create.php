<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WeatherParse */

$this->title = 'Create Weather Parse';
$this->params['breadcrumbs'][] = ['label' => 'Weather Parses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-parse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cities' => $cities
    ]) ?>

</div>
