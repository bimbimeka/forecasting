<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property integer $id
 * @property string $barcode
 * @property string $jenis
 * @property string $artikel
 * @property integer $stock
 * @property integer $user_id
 * @property string $last_edit
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barcode', 'jenis', 'artikel', 'stock'], 'required'],
            [['stock', 'user_id'], 'integer'],
            [['last_edit'], 'safe'],
            [['barcode', 'jenis', 'artikel'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'barcode' => 'Barcode',
            'jenis' => 'Jenis',
            'artikel' => 'Artikel',
            'stock' => 'Stock',
            'user_id' => 'User ID',
            'last_edit' => 'Last Edit',
        ];
    }
}
