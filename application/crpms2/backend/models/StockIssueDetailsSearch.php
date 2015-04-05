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
            [['id', 'location_id', 'stock_inventory_id', 'stock_status_id'], 'integer'],
            [['stock_issue_code', 'employee_id', 'issue_from'], 'safe'],
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
		$query->joinWith('employee');
        $query->andFilterWhere([
            'id' => $this->id,
            'location_id' => $this->location_id,
            'stock_inventory_id' => $this->stock_inventory_id,
            'stock_status_id' => $this->stock_status_id,
        //    'employee_id' => $this->employee_id,
        ]);

        $query->andFilterWhere(['like', 'stock_issue_code', $this->stock_issue_code])
            ->andFilterWhere(['like', 'issue_from', $this->issue_from])
			->andFilterWhere(['like', 'employee.lastname', $this->employee_id]);

        return $dataProvider;
    }
}
