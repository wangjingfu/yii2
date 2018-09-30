<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m180928_112238_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull()->defaultValue(''),
            'icon' => $this->string(50)->notNull()->defaultValue(''),
            'parent_id' => $this->integer(10)->notNull()->defaultValue(0),
            'sort' => $this->tinyInteger(2)->notNull()->defaultValue(0),
            'created_at' => $this->integer(11)->notNull()->defaultValue(0),
            'updated_at' => $this->integer(11)->notNull()->defaultValue(0)
        ]);
        
        $this->insert('menu', [
            'name' => '系统管理',
            'icon' => 'fa-cog',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('menu');
    }
}
