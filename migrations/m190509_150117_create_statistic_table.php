<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statistic}}`.
 */
class m190509_150117_create_statistic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%statistic}}', [
            'id' => $this->primaryKey(),
            'nhl_id' => $this->integer(),
            'comand_name' => $this->string(),
            'game_count' => $this->integer(),
            'points' => $this->integer()
        ]);
        $this->addForeignKey("fk", "{{%statistic}}", "nhl_id", "{{%nhl}}", "id", 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%statistic}}');
    }
}
