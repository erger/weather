<?php
use Yii;
use yii\web\View;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <p>Check get token</p>
                <form action="http://weather.local/auth" method="post">
                    <input type="text" name="username" value="" placeholder="username">
                    <input type="password" name="password" value="" placeholder="password">
                    <br>
                    <input type="submit" class="btn btn-success" value="Send">
                </form>
            </div>
            <div class="col-lg-6">
                <p>Check get weather data</p>
                <form action="http://weather-admin.local/site/check" method="post">
                    <input type="text" name="token" value="" placeholder="token">
                    <?php
                    echo Html::hiddenInput(Yii::$app->getRequest()->csrfParam, Yii::$app->getRequest()->getCsrfToken(), []);?>
                    <br>
                    <input type="submit" class="btn btn-success" value="Send">
                </form>
            </div>
        </div>

    </div>
</div>
