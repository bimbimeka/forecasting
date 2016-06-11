<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_jahit`.
 */
class m160601_125948_create_table_jahit extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('jahit', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(),
            'ongkos' => $this->double(),
            'potong' => $this->double(),
            'steam' => $this->double(),
            'plastik' => $this->double(),
            'gas' => $this->double(),
            'listrik' => $this->double(),
            'makan' => $this->double(),
            'benang' => $this->double(),
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
        $this->dropTable('jahit');
    }
}
