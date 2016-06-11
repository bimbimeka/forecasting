<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penjualan;

/**
 * PenjualanSearch represents the model behind the search form about `app\models\Penjualan`.
 */
class PenjualanSearch extends Penjualan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'barang_id', 'qty', 'sablon_id', 'jahit_id', 'user_id'], 'integer'],
            [['nama', 'tanggal', 'last_edit'], 'safe'],
            [['harga', 'harga_bahan', 'total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Penjualan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'barang_id' => $this->barang_id,
            'qty' => $this->qty,
            'harga' => $this->harga,
            'harga_bahan' => $this->harga_bahan,
            'sablon_id' => $this->sablon_id,
            'jahit_id' => $this->jahit_id,
            'total' => $this->total,
            'user_id' => $this->user_id,
            'last_edit' => $this->last_edit,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
