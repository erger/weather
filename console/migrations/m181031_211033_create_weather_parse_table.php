<?php

use yii\db\Migration;

/**
 * Handles the creation of table `weather_parse`.
 */
class m181031_211033_create_weather_parse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%weather_parse}}', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
        $this->createIndex('idx-token-city_id', '{{%weather_parse}}', 'city_id');
        $this->addForeignKey('fk-token-city_id', '{{%weather_parse}}', 'city_id', '{{%weather_cities}}', 'id', 'CASCADE', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weather_parse}}');
    }
}
