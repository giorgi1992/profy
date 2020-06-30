<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m200630_193131_create_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()
        ]);

        $this->insert('{{%status}}', ['name' => 'Created']);
        $this->insert('{{%status}}', ['name' => 'Submitted']);
        $this->insert('{{%status}}', ['name' => 'Viewed']);
        $this->insert('{{%status}}', ['name' => 'In Progress']);
        $this->insert('{{%status}}', ['name' => 'Completed']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%status}}');
    }
}
