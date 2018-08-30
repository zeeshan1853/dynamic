<?php

use yii\db\Migration;

/**
 * Handles the creation of table `settings`.
 */
class m180830_035749_create_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings', [
            'id' => $this->primaryKey(),
            'ms_sheet' => $this->double(), 
            'ss_sheet' => $this->double(), 
            'powder_coating' => $this->double(), 
            'glass' => $this->double(),
            'created_at' =>  $this->dateTime() . ' DEFAULT NOW()',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings');
    }
}
