<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StockIssueDetails;

/**
 * StockIssueDetailsSearch represents the model behind the search form about `backend\models\StockIssueDetails`.
 */
class StockIssueDetailsSearch extends StockIssueDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item_id', 'quantity', 'stock_issue_header_id'], 'integer'],
            [['stock_issue_code', 'date_created', 'exp_date', 'remarks'], 'safe'],
            [['unit_cost', 'amount'], 'number'],
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
        $query = StockIssueDetails::find();

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
            'date_created' => $this->date_created,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'exp_date' => $this->exp_date,
            'unit_cost' => $this->unit_cost,
            'amount' => $this->amount,
            'stock_issue_header_id' => $this->stock_issue_header_id,
        ]);

        $query->andFilterWhere(['like', 'stock_issue_code', $this->stock_issue_code])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
