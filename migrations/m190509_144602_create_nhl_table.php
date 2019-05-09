<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nhl}}`.
 */
class m190509_144602_create_nhl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nhl}}', [
            'id' => $this->primaryKey(),
            'country_code' => $this->string(),
            'rank' => $this->integer(),
            'comand_count' => $this->integer(),
            'foundation_date' => $this->dateTime(),
            'season' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nhl}}');
    }
}
