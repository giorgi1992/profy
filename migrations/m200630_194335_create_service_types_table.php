<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service_types}}`.
 */
class m200630_194335_create_service_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service_types}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()
        ]);

        $this->insert('{{%service_types}}', ['name' => 'Cleaning']);
        $this->insert('{{%service_types}}', ['name' => 'Handyman']);
        $this->insert('{{%service_types}}', ['name' => 'Electricity']);
        $this->insert('{{%service_types}}', ['name' => 'Plumbing']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service_types}}');
    }
}
