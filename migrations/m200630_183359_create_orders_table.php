<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m200630_183359_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'tasker_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'price' => $this->float()->notNull(),
            'started_at' => $this->timestamp()->notNull(),
            'finished_at' => $this->timestamp(),
            'review' => $this->text(),
            'rating' => $this->integer()
        ]);

        $this->createIndex('user_id', 'users', 'id');
        $this->createIndex('tasker_id', 'users', 'id');
        $this->addForeignKey('fk-orders-user_id', 'orders', 'user_id', 'users', 'id', 'CASCADE');
        $this->addForeignKey('fk-orders-tasker_id', 'orders', 'tasker_id', 'users', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
        $this->dropIndex('idx-orders-user_id', 'orders');
        $this->dropIndex('idx-orders-tasker_id', 'orders');
        $this->dropForeignKey('fk-orders-user_id', 'orders');
        $this->dropForeignKey('fk-orders-tasker_id', 'orders');
    }
}
