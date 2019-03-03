<?php

use yii\db\Migration;

/**
 * Class m190302_182656_create_task
 */
class m190302_182656_create_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'project_id' => $this->integer(),
            'executor_id' => $this->integer(),
            'started_at' => $this->integer(),
            'completed_at' => $this->integer(),
            'creator_id' => $this->integer()->notNull(),
            'updater_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()
        ]);

        $this->addForeignKey('fx_user_task_1', 'task', ['executor_id'], 'user', ['id']);
        $this->addForeignKey('fx_user_task_2', 'task', ['creator_id'], 'user', ['id']);
        $this->addForeignKey('fx_user_task_3', 'task', ['updater_id'], 'user', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('task');
        return true;
    }
}
