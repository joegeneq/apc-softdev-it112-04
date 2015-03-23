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
            [['id', 'ward_id', 'bed_number_id', 'accounting_status_id', 'user_id'], 'integer'],
            [['patient_last_name', 'patient_first_name', 'patient_middle_initial', 'date', 'returned_by', 'received_by', 'approved_by'], 'safe'],
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
            'ward_id' => $this->ward_id,
            'bed_number_id' => $this->bed_number_id,
            'accounting_status_id' => $this->accounting_status_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'patient_last_name', $this->patient_last_name])
            ->andFilterWhere(['like', 'patient_first_name', $this->patient_first_name])
            ->andFilterWhere(['like', 'patient_middle_initial', $this->patient_middle_initial])
            ->andFilterWhere(['like', 'returned_by', $this->returned_by])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'approved_by', $this->approved_by]);

        return $dataProvider;
    }
}
