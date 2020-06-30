<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m200630_183419_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'type' => $this->integer()->notNull(),
            'price' => $this->float()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
