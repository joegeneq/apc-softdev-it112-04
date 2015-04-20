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
            [['id', 'stock_issue_header_id', 'item_id', 'quantity', 'created_by'], 'integer'],
            [['date_release', 'exp_date', 'remarks', 'date_created'], 'safe'],
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
            'stock_issue_header_id' => $this->stock_issue_header_id,
            'date_release' => $this->date_release,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'exp_date' => $this->exp_date,
            'unit_cost' => $this->unit_cost,
            'amount' => $this->amount,
            'date_created' => $this->date_created,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
