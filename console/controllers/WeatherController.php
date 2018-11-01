<?php
namespace console\controllers;

use Yii;
use backend\models\WeatherParse;
use common\models\WeatherCurrent;
use yii\console\Controller;
use yii\httpclient\Client;


class WeatherController extends Controller {

    private $_key = '57b8b788446d244b22df92e963d02b29';
    private $_url = 'http://api.openweathermap.org/data/2.5/group';

    public function actionIndex() {

        $cities = WeatherParse::find()->select('city_id')->all();
        foreach ($cities as $city) {
            $cities_ids[] = $city->city_id;
        }
        $client = new Client();
        $response = $client->get($this->_url,
            [
                'id' => implode(',', $cities_ids),
                'units' => 'metric',
                'APPID' => $this->_key
            ]
        )->send();
        if ($response->isOk) {
            Yii::$app->db->createCommand()->truncateTable('weather_current')->execute();
            foreach($response->data['list'] as $v) {
                $model = new WeatherCurrent;
                $model->city = $v['name'];
                $model->current_temp = $v['main']['temp'];
                if($model->validate()) {
                    $model->save();
                }
            }

            Yii::$app->end();
        }
    }

}