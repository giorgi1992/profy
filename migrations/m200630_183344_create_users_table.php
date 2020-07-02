<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m200630_183344_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'login' => $this->string(20)->notNull()->unique(),
            'password' => $this->string(100)->notNull(),
            'role' => $this->integer(1)->notNull(),
            'service_type' => $this->integer(1),
            'first_name' => $this->string(50)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'gender' => $this->integer(1)->notNull(),
            'birth_date' => $this->date()->notNull(),
            'phone' => $this->string(15)->notNull(),
            'email' => $this->string(50)->notNull(),
            'referral_code' => $this->string(100)->notNull(),
            'created_at' => $this->dateTime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
