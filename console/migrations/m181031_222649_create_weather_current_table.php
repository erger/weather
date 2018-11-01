<?php

use yii\db\Migration;

/**
 * Handles the creation of table `weather_current`.
 */
class m181031_222649_create_weather_current_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%weather_current}}', [
            'id' => $this->primaryKey(),
            'city' => $this->string()->notNull(),
            'current_temp' => $this->float()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weather_current}}');
    }
}
