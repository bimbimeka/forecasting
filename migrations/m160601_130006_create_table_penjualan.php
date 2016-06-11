<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_penjualan`.
 */
class m160601_130006_create_table_penjualan extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('penjualan', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'tanggal' => $this->date(),
            'barang_id' => $this->integer()->notNull(),
            'qty' => $this->integer(),
            'harga' => $this->double(),
            'harga_bahan' => $this->double(),
            'sablon_id' => $this->integer(),
            'jahit_id' => $this->integer(),
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
        $this->dropTable('penjualan');
    }
}
