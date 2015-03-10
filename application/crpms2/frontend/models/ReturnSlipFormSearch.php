<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ReturnSlipForm;

/**
 * ReturnSlipFormSearch represents the model behind the search form about `frontend\models\ReturnSlipForm`.
 */
class ReturnSlipFormSearch extends ReturnSlipForm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'accounting_status', 'user_id'], 'integer'],
            [['patient_last_name', 'patient_first_name', 'patient_middle_initial', 'date', 'ward_name', 'bed_number', 'returned_by', 'received_by', 'approved_by'], 'safe'],
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
        $query = ReturnSlipForm::find();

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
            'date' => $this->date,
            'accounting_status' => $this->accounting_status,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'patient_last_name', $this->patient_last_name])
            ->andFilterWhere(['like', 'patient_first_name', $this->patient_first_name])
            ->andFilterWhere(['like', 'patient_middle_initial', $this->patient_middle_initial])
            ->andFilterWhere(['like', 'ward_name', $this->ward_name])
            ->andFilterWhere(['like', 'bed_number', $this->bed_number])
            ->andFilterWhere(['like', 'returned_by', $this->returned_by])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
