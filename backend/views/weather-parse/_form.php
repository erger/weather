<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\WeatherParse */
/* @var $cities backend\models\WeatherCities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weather-parse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo '<label class="control-label">City</label>';
    echo Select2::widget([
        'name' => 'WeatherParse[city_id]',
        'value' => [$model->city_id], // initial value
        'data' => $cities,
    ]);

    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
