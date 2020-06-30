<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gender}}`.
 */
class m200630_190715_create_gender_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gender}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()
        ]);

        $this->insert('{{%gender}}', ['name' => 'Male']);
        $this->insert('{{%gender}}', ['name' => 'Famale']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gender}}');
    }
}
