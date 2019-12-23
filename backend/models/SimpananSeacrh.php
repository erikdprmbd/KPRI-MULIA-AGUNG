<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Simpanan;

/**
 * SimpananSeacrh represents the model behind the search form of `backend\models\Simpanan`.
 */
class SimpananSeacrh extends Simpanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_simpanan', 'kode_rekening', 'id_jenis_simpanan', 'id_anggota', 'jumlah_simpanan'], 'integer'],
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
        $query = Simpanan::find();

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
            'id_simpanan' => $this->id_simpanan,
            'kode_rekening' => $this->kode_rekening,
            'id_jenis_simpanan' => $this->id_jenis_simpanan,
            'id_anggota' => $this->id_anggota,
            'jumlah_simpanan' => $this->jumlah_simpanan,
        ]);

        return $dataProvider;
    }
}
