<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Jenis_simpanan;

/**
 * Jenis_simpananSeacrh represents the model behind the search form of `backend\models\Jenis_simpanan`.
 */
class Jenis_simpananSeacrh extends Jenis_simpanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_simpanan'], 'integer'],
            [['nama_simpanan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Jenis_simpanan::find();

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
            'id_jenis_simpanan' => $this->id_jenis_simpanan,
        ]);

        $query->andFilterWhere(['like', 'nama_simpanan', $this->nama_simpanan]);

        return $dataProvider;
    }
}
