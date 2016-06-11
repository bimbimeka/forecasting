<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tanggal
 * @property integer $barang_id
 * @property integer $qty
 * @property double $harga
 * @property double $harga_bahan
 * @property integer $sablon_id
 * @property integer $jahit_id
 * @property double $total
 * @property integer $user_id
 * @property string $last_edit
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'barang_id'], 'required'],
            [['tanggal', 'last_edit'], 'safe'],
            [['barang_id', 'qty', 'sablon_id', 'jahit_id', 'user_id'], 'integer'],
            [['harga', 'harga_bahan', 'total'], 'number'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tanggal' => 'Tanggal',
            'barang_id' => 'Barang',
            'qty' => 'Qty',
            'harga' => 'Harga',
            'harga_bahan' => 'Harga Bahan',
            'sablon_id' => 'Sablon',
            'jahit_id' => 'Jahit',
            'total' => 'Total',
            'user_id' => 'User ID',
            'last_edit' => 'Last Edit',
        ];
    }
    
    public function getBarang(){
        return $this->hasOne(Barang::className(), ['id' => 'barang_id']);
    }
    
    public function getSablon(){
        return $this->hasOne(Sablon::className(), ['id' => 'sablon_id']);
    }
    
    public function getJahit(){
        return $this->hasOne(Jahit::className(), ['id' => 'jahit_id']);
    }
}
