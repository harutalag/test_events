<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%organizer}}`.
 */
class m240601_093529_create_organizer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('organizer', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%organizer}}');
    }
}
