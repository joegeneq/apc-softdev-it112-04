<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReturnItemDetails;

/**
 * ReturnItemDetailsSearch represents the model behind the search form about `backend\models\ReturnItemDetails`.
 */
class ReturnItemDetailsSearch extends ReturnItemDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'location_id', 'return_item_header_id', 'accounting_status_id', 'employee_id'], 'integer'],
            [['return_item_details_code', 'return_to', 'created_at'], 'safe'],
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
        $query = ReturnItemDetails::find();

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
            'location_id' => $this->location_id,
            'return_item_header_id' => $this->return_item_header_id,
            'accounting_status_id' => $this->accounting_status_id,
            'employee_id' => $this->employee_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'return_item_details_code', $this->return_item_details_code])
            ->andFilterWhere(['like', 'return_to', $this->return_to]);

        return $dataProvider;
    }
}
