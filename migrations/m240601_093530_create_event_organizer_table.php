<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event_organizer}}`.
 */
class m240601_093530_create_event_organizer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('event_organizer', [
            'event_id' => $this->integer(),
            'organizer_id' => $this->integer(),
        ]);

        $this->addPrimaryKey('pk-event_organizer', 'event_organizer', ['event_id', 'organizer_id']);

        $this->addForeignKey('fk-event_organizer-event', 'event_organizer', 'event_id', 'event', 'id', 'CASCADE');
        $this->addForeignKey('fk-event_organizer-organizer', 'event_organizer', 'organizer_id', 'organizer', 'id', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('event_organizer');
    }
}
