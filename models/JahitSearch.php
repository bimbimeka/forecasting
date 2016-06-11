<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jahit;

/**
 * JahitSearch represents the model behind the search form about `app\models\Jahit`.
 */
class JahitSearch extends Jahit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['nama', 'last_edit'], 'safe'],
            [['ongkos', 'potong', 'steam', 'plastik', 'gas', 'listrik', 'makan', 'benang', 'total'], 'number'],
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
        $query = Jahit::find();

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
            'ongkos' => $this->ongkos,
            'potong' => $this->potong,
            'steam' => $this->steam,
            'plastik' => $this->plastik,
            'gas' => $this->gas,
            'listrik' => $this->listrik,
            'makan' => $this->makan,
            'benang' => $this->benang,
            'total' => $this->total,
            'user_id' => $this->user_id,
            'last_edit' => $this->last_edit,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
