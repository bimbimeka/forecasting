<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jahit".
 *
 * @property integer $id
 * @property string $nama
 * @property double $ongkos
 * @property double $potong
 * @property double $steam
 * @property double $plastik
 * @property double $gas
 * @property double $listrik
 * @property double $makan
 * @property double $benang
 * @property double $total
 * @property integer $user_id
 * @property string $last_edit
 */
class Jahit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jahit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ongkos', 'potong', 'steam', 'plastik', 'gas', 'listrik', 'makan', 'benang', 'total'], 'number'],
            [['user_id'], 'integer'],
            [['last_edit'], 'safe'],
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
            'ongkos' => 'Ongkos',
            'potong' => 'Potong',
            'steam' => 'Steam',
            'plastik' => 'Plastik',
            'gas' => 'Gas',
            'listrik' => 'Listrik',
            'makan' => 'Makan',
            'benang' => 'Benang',
            'total' => 'Total',
            'user_id' => 'User ID',
            'last_edit' => 'Last Edit',
        ];
    }
}
