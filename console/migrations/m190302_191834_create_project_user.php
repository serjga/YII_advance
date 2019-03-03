<?php

use yii\db\Migration;

/**
 * Class m190302_191834_create_project_user
 */
class m190302_191834_create_project_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_user', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'role' => 'ENUM("manager", "developer", "tester")'
        ]);

        $this->addForeignKey('fx_user_project_user', 'project_user', ['user_id'], 'user', ['id']);
        $this->addForeignKey('fx_project_project_user', 'project_user', ['project_id'], 'project', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project_user');
        return true;
    }
}
