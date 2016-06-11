<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_barang`.
 */
class m160601_125956_create_table_barang extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('barang', [
            'id' => $this->primaryKey(),
            'barcode' => $this->string()->notNull(),
            'jenis' => $this->string()->notNull(),
            'artikel' => $this->string()->notNull(),
            'stock' => $this->integer()->notNull(),
            'user_id' => $this->integer(),
            'last_edit' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('barang');
    }
}
