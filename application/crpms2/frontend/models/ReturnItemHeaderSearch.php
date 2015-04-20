<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ReturnItemHeader;

/**
 * ReturnItemHeaderSearch represents the model behind the search form about `frontend\models\ReturnItemHeader`.
 */
class ReturnItemHeaderSearch extends ReturnItemHeader
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'location_id', 'bed_id', 'employee_id', 'employee_lastname', 'employee_firstname', 'accounting_status_id'], 'integer'],
            [['return_item_header_code', 'date_prepared', 'date_created', 'date_updated'], 'safe'],
            [['total_amount'], 'number'],
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
            'date_prepared' => $this->date_prepared,
            'patient_id' => $this->patient_id,
            'location_id' => $this->location_id,
            'bed_id' => $this->bed_id,
            'total_amount' => $this->total_amount,
            'employee_id' => $this->employee_id,
            'employee_lastname' => $this->employee_lastname,
            'employee_firstname' => $this->employee_firstname,
            'accounting_status_id' => $this->accounting_status_id,
            'date_created' => $this->date_created,
            'date_updated' => $this->date_updated,
        ]);

        $query->andFilterWhere(['like', 'return_item_header_code', $this->return_item_header_code]);

        return $dataProvider;
    }
}
