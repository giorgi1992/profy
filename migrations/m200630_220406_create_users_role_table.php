<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_role}}`.
 */
class m200630_220406_create_users_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()
        ]);

        $this->insert('{{%users_role}}', ['name' => 'Customer']);
        $this->insert('{{%users_role}}', ['name' => 'Tasker']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users_role}}');
    }
}
