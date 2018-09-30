<?php

use yii\db\Migration;

/**
 * Class m180929_022717_update_menu_table
 */
class m180929_022717_update_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'url', $this->string(200)->notNull()->defaultValue(''));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('menu', 'url');
    }
}
