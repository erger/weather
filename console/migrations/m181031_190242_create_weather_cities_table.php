<?php

use yii\db\Migration;

/**
 * Class m181031_190242_create_weather_cities_table
 */
class m181031_190242_create_weather_cities_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%weather_cities}}', [
            'id' => $this->primaryKey(),
            'city' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'lat' => $this->float()->notNull(),
            'lon' => $this->float()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
        $this->createIndex('idx-token-city', '{{%weather_cities}}', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weather_cities}}');
    }
}
