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

    public function attributes()
   {      
       return array_merge(parent::attributes(), ['escola.nome', 'organizador.nome']);
   }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nome', 'data', 'anexo', 'categoria', 'escola.nome', 'organizador.nome'], 'safe'],
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

        $query->joinWith(['escola']);
        $dataProvider->sort->attributes['escola.nome'] = [
        'asc' => ['escola.nome' => SORT_ASC],
        'desc' => ['escola.nome' => SORT_DESC],
        ];

        $query->joinWith(['organizador']);
        $dataProvider->sort->attributes['organizador.nome'] = [
        'asc' => ['organizador.nome' => SORT_ASC],
        'desc' => ['organizador.nome' => SORT_DESC],
        ];

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

        $query->andFilterWhere(['like', 'projeto.nome', $this->nome])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'anexo', $this->anexo])
            ->andFilterWhere(['like', 'categoria', $this->categoria])
            ->andFilterWhere(['like', 'escola.nome',$this->getAttribute('escola.nome')])
            ->andFilterWhere(['like', 'organizador.nome',$this->getAttribute('organizador.nome')]);

        return $dataProvider;
    }
}
