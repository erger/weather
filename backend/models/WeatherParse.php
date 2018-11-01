<?php

namespace backend\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "weather_parse".
 * Table with lists cities for parsing
 *
 * @property int $id
 * @property int $city_id
 *
 * @property WeatherCities $city
 */
class WeatherParse extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather_parse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id'], 'required'],
            [['city_id'], 'integer'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => WeatherCities::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(WeatherCities::className(), ['id' => 'city_id']);
    }
}
