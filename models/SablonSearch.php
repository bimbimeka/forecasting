<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sablon;

/**
 * SablonSearch represents the model behind the search form about `app\models\Sablon`.
 */
class SablonSearch extends Sablon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['nama', 'last_edit'], 'safe'],
            [['ongkos', 'cat', 'listrik', 'makan', 'press', 'dll', 'total'], 'number'],
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
        $query = Sablon::find();

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
            'cat' => $this->cat,
            'listrik' => $this->listrik,
            'makan' => $this->makan,
            'press' => $this->press,
            'dll' => $this->dll,
            'total' => $this->total,
            'user_id' => $this->user_id,
            'last_edit' => $this->last_edit,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
