<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "weather_current".
 *
 * @property int $id
 * @property string $city
 * @property double $current_temp
 */
class WeatherCurrent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather_current';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'current_temp'], 'required'],
            [['current_temp'], 'number'],
            [['city'], 'string', 'max' => 255],
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
            'current_temp' => 'current_temp',
        ];
    }
}
