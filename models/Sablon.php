<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sablon".
 *
 * @property integer $id
 * @property string $nama
 * @property double $ongkos
 * @property double $cat
 * @property double $listrik
 * @property double $makan
 * @property double $press
 * @property double $dll
 * @property double $total
 * @property integer $user_id
 * @property string $last_edit
 */
class Sablon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sablon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['ongkos', 'cat', 'listrik', 'makan', 'press', 'dll', 'total'], 'number'],
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
            'cat' => 'Cat',
            'listrik' => 'Listrik',
            'makan' => 'Makan',
            'press' => 'Press',
            'dll' => 'Dll',
            'total' => 'Total',
            'user_id' => 'User ID',
            'last_edit' => 'Last Edit',
        ];
    }
}
