<?php

namespace backend\models;

use Yii;
use JsonStreamingParser\Parser;

/**
 * This is the model class for table "weather_cities".
 *
 * @property int $id
 * @property string $city
 * @property string $country
 * @property double $lat
 * @property double $lon
 */
class WeatherCities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather_cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'country', 'lat', 'lon'], 'required'],
            [['lat', 'lon'], 'number'],
            [['city', 'country'], 'string', 'max' => 255],
            [['city', 'country', 'lat', 'lon'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'country' => 'Country',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }

    public static function fillTable()
    {
        ini_set('memory_limit', '-1');
        $citiesList = file_get_contents(Yii::getAlias('@backend') . '/web/json/city.list.json');
        $wqe = json_decode($citiesList);
        foreach ($wqe as $city) {
            if (self::find()->where(['id' => $city->id])->one()) {
                continue;
            }
            $model = new static();
            $model->id = $city->id;
            $model->city = $city->name;
            $model->country = $city->country;
            $model->lat = $city->coord->lat;
            $model->lon = $city->coord->lon;
            if($model->validate() ) {
                var_dump($model->save());
            }
        }

        return;
    }
}
