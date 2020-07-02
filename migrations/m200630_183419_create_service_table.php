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

        $this->insert('{{%service}}', ['name' => 'Cooking', 'type' => 1, 'price' => 10]);
        $this->insert('{{%service}}', ['name' => 'Lighting', 'type' => 2, 'price' => 15]);
        $this->insert('{{%service}}', ['name' => 'TV', 'type' => 3, 'price' => 22]);
        $this->insert('{{%service}}', ['name' => 'Wiring', 'type' => 4, 'price' => 30]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
