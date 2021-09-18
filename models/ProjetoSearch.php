<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projeto;

/**
 * ProjetoSearch represents the model behind the search form of `app\models\Projeto`.
 */
class ProjetoSearch extends Projeto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'escola_id', 'organizador_id'], 'integer'],
            [['nome', 'data', 'anexo'], 'safe'],
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
        $query = Projeto::find();

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
            'escola_id' => $this->escola_id,
            'organizador_id' => $this->organizador_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'anexo', $this->anexo]);

        return $dataProvider;
    }
}
