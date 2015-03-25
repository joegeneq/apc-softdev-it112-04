<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StockStatus;

/**
 * StockStatusSearch represents the model behind the search form about `backend\models\StockStatus`.
 */
class StockStatusSearch extends StockStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['status_code', 'description_name'], 'safe'],
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
        $query = StockStatus::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'status_code', $this->status_code])
            ->andFilterWhere(['like', 'description_name', $this->description_name]);

        return $dataProvider;
    }
}
