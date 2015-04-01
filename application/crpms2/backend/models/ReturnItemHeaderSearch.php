<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ReturnItemHeader;

/**
 * ReturnItemHeaderSearch represents the model behind the search form about `backend\models\ReturnItemHeader`.
 */
class ReturnItemHeaderSearch extends ReturnItemHeader
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'location_id', 'bed_id', 'item_id', 'quantity'], 'integer'],
            [['return_item_header_code', 'patient_last_name', 'patient_first_name', 'patient_middle_initial', 'remarks', 'created'], 'safe'],
            [['amount'], 'number'],
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
        $query = ReturnItemHeader::find();

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
            'bed_id' => $this->bed_id,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'amount' => $this->amount,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'return_item_header_code', $this->return_item_header_code])
            ->andFilterWhere(['like', 'patient_last_name', $this->patient_last_name])
            ->andFilterWhere(['like', 'patient_first_name', $this->patient_first_name])
            ->andFilterWhere(['like', 'patient_middle_initial', $this->patient_middle_initial])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
