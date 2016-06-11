<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_sablon`.
 */
class m160601_125928_create_table_Sablon extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sablon', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'ongkos' => $this->double(),
            'cat' => $this->double(),
            'listrik' => $this->double(),
            'makan' => $this->double(),
            'press' => $this->double(),
            'dll' => $this->double(),
            'total' => $this->double(),
            'user_id' => $this->integer(),
            'last_edit' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sablon');
    }
}
